<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ScanLog;
use App\Models\Invitation;
use App\Models\SubAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InvitationController extends Controller
{
    public function index()
    {
        $this->updateExpiredInvitations();

        $user = Auth::user();

        // Invitations by parent user
        $ownInvitations = $user->invitations()->latest()->get();

        // Invitations by sub-accounts (based on email)
        $subAccountEmails = SubAccount::where('user_id', $user->id)->pluck('email');
        $subInvitations = Invitation::whereIn('email', $subAccountEmails)->latest()->get();

        return view('invitations.index', compact('ownInvitations', 'subInvitations'));
    }

    private function updateExpiredInvitations()
    {
        $now = Carbon::now();
        Invitation::where('user_id', Auth::id())
            ->where('status', 'active')
            ->where('expire_at', '<', $now)
            ->update(['status' => 'inactive']);
    }

    public function create()
    {
        return view('invitations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'description' => 'required|string',
            'expire_at'   => 'required|date|after_or_equal:now',
            'status'      => 'required|in:active,inactive',
        ]);

        $user = Auth::user();
        $token = Str::random(100);

        $invitation = Invitation::create([
            'user_id'     => $user->id,
            'email'       => $user->email,
            'guest_name'  => $request->guest_name,
            'description' => $request->description,
            'expire_at'   => $request->expire_at,
            'status'      => $request->status,
            'qrcodetoken' => $token,
            'is_shared'   => false,
        ]);

        // Generate QR code containing only the token
        $qrSvg = QrCode::format('svg')
            ->size(200)
            ->generate($token);
        $fileName = "invitations/{$invitation->id}_qrcode.svg";
        Storage::disk('public')->put($fileName, $qrSvg);

        $invitation->qrcode = $fileName;
        $invitation->save();

        return redirect()->route('invitations.index')
                         ->with('success', 'Invitation created successfully!');
    }

    /**
     * Verify token via POST and return invitation info as JSON
     * Route to add in routes/api.php:
     * Route::post('/invitations/verify', [InvitationController::class, 'verify']);
     */
    public function verify(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        $invitation = Invitation::where('qrcodetoken', $request->token)->first();

        if (! $invitation) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid token.',
            ], 404);
        }

        $now = Carbon::now();

        if ($invitation->expire_at->isPast()) {
            // Mark expired
            $invitation->status = 'inactive';
            $invitation->save();

            ScanLog::create([
                'invitation_id'      => $invitation->id,
                'ip_address'         => $request->ip(),
                'user_agent'         => $request->userAgent(),
                'is_valid'           => false,
                'validation_message' => 'Expired invitation',
            ]);

            return response()->json([
                'success' => false,
                'message' => 'This invitation has expired.',
            ], 410);
        }

        if ($invitation->status !== 'active') {
            ScanLog::create([
                'invitation_id'      => $invitation->id,
                'ip_address'         => $request->ip(),
                'user_agent'         => $request->userAgent(),
                'is_valid'           => false,
                'validation_message' => 'Inactive invitation',
            ]);

            return response()->json([
                'success' => false,
                'message' => 'This invitation is not active.',
            ], 403);
        }

        // Valid invitation
        ScanLog::create([
            'invitation_id'      => $invitation->id,
            'ip_address'         => $request->ip(),
            'user_agent'         => $request->userAgent(),
            'is_valid'           => true,
            'validation_message' => 'Valid invitation',
        ]);

        return response()->json([
            'success'    => true,
            'invitation' => $invitation->only([
                'id', 'guest_name', 'description', 'expire_at', 'status'
            ]),
        ]);
    }

    public function edit($id)
    {
        $invitation = Invitation::findOrFail($id);
        
        // Prevent editing if invitation has been shared
        if ($invitation->is_shared) {
            return redirect()->route('invitations.index')
                ->with('error', 'This invitation has been shared and cannot be edited.');
        }
        
        return view('invitations.edit', compact('invitation'));
    }

    public function update(Request $request, $id)
    {
        $invitation = Invitation::findOrFail($id);
        
        // Prevent updating if invitation has been shared
        if ($invitation->is_shared) {
            return redirect()->route('invitations.index')
                ->with('error', 'This invitation has been shared and cannot be updated.');
        }
        
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'description' => 'required|string',
            'expire_at' => 'required|date|after_or_equal:now',
            'status' => 'required|in:active,inactive',
        ]);

        $invitation->update($request->all());

        return redirect()->route('invitations.index')->with('success', 'Invitation updated successfully!');
    }

    public function destroy($id)
    {
        $invitation = Invitation::findOrFail($id);
        
        // Prevent deletion if invitation has been shared
        if ($invitation->is_shared) {
            return redirect()->route('invitations.index')
                ->with('error', 'This invitation has been shared and cannot be deleted.');
        }
        
        if ($invitation->qrcode) {
            Storage::delete('public/' . $invitation->qrcode);
        }
        $invitation->delete();
        return redirect()->route('invitations.index')->with('success', 'Invitation deleted successfully!');
    }

    public function share($id)
    {
        $this->updateExpiredInvitations();
        $invitation = Invitation::findOrFail($id);
        
        // Mark invitation as shared
        $invitation->is_shared = true;
        $invitation->save();
        
        return view('invitations.share', compact('invitation'));
    }

    public function showLogs($id)
    {
        $invitation = Invitation::findOrFail($id);
        $scanLogs = $invitation->scanLogs()->latest()->get();
        return view('invitations.logs', compact('invitation', 'scanLogs'));
    }
}