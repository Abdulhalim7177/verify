<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ScanLog;
use App\Models\Invitation;
use App\Models\SubAccount;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $subAccountEmails = \App\Models\SubAccount::where('user_id', $user->id)->pluck('email');
        $subInvitations = \App\Models\Invitation::whereIn('email', $subAccountEmails)->latest()->get();
    
        return view('invitations.index', [
            'ownInvitations' => $ownInvitations,
            'subInvitations' => $subInvitations,
        ]);
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
            'expire_at' => 'required|date|after_or_equal:now',
            'status' => 'required|in:active,inactive',
        ]);

        $user = Auth::user();
        $qrcodetoken = Str::random(100);

        $invitation = Invitation::create([
            'user_id' => $user->id,
            'email' => $user->email, // track which user/subaccount created it
            'guest_name' => $request->guest_name,
            'description' => $request->description,
            'expire_at' => $request->expire_at,
            'status' => $request->status,
            'qrcodetoken' => $qrcodetoken,
            'is_shared' => false, // Add default value for new field
        ]);

        $validationLink = route('invitations.validate', $qrcodetoken);
        $qrCodeImage = QrCode::format('svg')->size(200)->generate($validationLink);
        $fileName = 'invitations/' . $invitation->id . '_qrcode.svg';
        Storage::disk('public')->put($fileName, $qrCodeImage);

        $invitation->qrcode = $fileName;
        $invitation->save();

        return redirect()->route('invitations.index')->with('success', 'Invitation created successfully!');
    }

    public function validateInvitation($token)
    {
        $invitation = Invitation::where('qrcodetoken', $token)->firstOrFail();
        $now = Carbon::now();

        $logData = [
            'invitation_id' => $invitation->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ];

        if ($invitation->expire_at < $now) {
            $invitation->status = 'inactive';
            $invitation->save();

            ScanLog::create(array_merge($logData, [
                'is_valid' => false,
                'validation_message' => 'Expired invitation'
            ]));

            return view('invitations.validation', [
                'valid' => false,
                'message' => 'This invitation has expired.',
                'invitation' => $invitation
            ]);
        }

        if ($invitation->status !== 'active') {
            ScanLog::create(array_merge($logData, [
                'is_valid' => false,
                'validation_message' => 'Inactive invitation'
            ]));

            return view('invitations.validation', [
                'valid' => false,
                'message' => 'This invitation is not active.',
                'invitation' => $invitation
            ]);
        }

        ScanLog::create(array_merge($logData, [
            'is_valid' => true,
            'validation_message' => 'Valid invitation'
        ]));

        return view('invitations.validation', [
            'valid' => true,
            'message' => 'Invitation is valid!',
            'invitation' => $invitation
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