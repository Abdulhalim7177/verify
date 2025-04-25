<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ScanLog;
use App\Models\Invitation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\SubAccount;

class InvitationController extends Controller
{
    public function index()
    {
        $this->updateExpiredInvitations();

        $user = Auth::user();
        
        // Get invitations from this user
        $ownInvitations = $user->invitations()->get();
        
        // Get sub-account emails linked to this user
        $subAccountEmails = SubAccount::where('user_id', $user->id)->pluck('email');
        
        // Get invitations created by sub-accounts (via email matching)
        $subInvitations = \App\Models\Invitation::whereIn('email', $subAccountEmails)->get();
        
        // Merge both collections
        $allInvitations = $ownInvitations->merge($subInvitations);
        
        // Sort by created_at descending
        $invitations = $allInvitations->sortByDesc('created_at');
        
        return view('invitations.index', compact('invitations'));
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
            'email' => $user->email,
            'guest_name' => $request->guest_name,
            'description' => $request->description,
            'expire_at' => $request->expire_at,
            'status' => $request->status,
            'qrcodetoken' => $qrcodetoken,
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
    
        // Create scan log data
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
        return view('invitations.edit', compact('invitation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'description' => 'required|string',
            'expire_at' => 'required|date|after_or_equal:now',
            'status' => 'required|in:active,inactive',
        ]);

        $invitation = Invitation::findOrFail($id);
        $invitation->update($request->all());

        return redirect()->route('invitations.index')->with('success', 'Invitation updated successfully!');
    }

    public function destroy($id)
    {
        $invitation = Invitation::findOrFail($id);
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
        return view('invitations.share', compact('invitation'));
    }
    public function showLogs($id)
{
    $invitation = Invitation::findOrFail($id);
    $scanLogs = $invitation->scanLogs()->latest()->get();
    
    return view('invitations.logs', compact('invitation', 'scanLogs'));
}
}