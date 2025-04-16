<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
    // Show all invitations for the authenticated user
    public function index()
    {
        // First, update expired invitations
        $this->updateExpiredInvitations();
        
        // Then fetch the updated invitations
        $invitations = Auth::user()->invitations;

        return view('invitations.index', compact('invitations'));
    }

    // Update expired invitations
    private function updateExpiredInvitations()
    {
        // Get current time
        $now = Carbon::now();
        
        // Find active invitations that have expired and update them to inactive
        $expiredInvitations = Invitation::where('user_id', Auth::id())
            ->where('status', 'active')
            ->where('expire_at', '<', $now)
            ->update(['status' => 'inactive']);
    }

    // Show the invitation creation form
    public function create()
    {
        return view('invitations.create');
    }

    // Store the invitation and generate QR code
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'description' => 'required|string',
            'expire_at' => 'required|date|after_or_equal:now',
            'status' => 'required|in:active,inactive',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Generate a random 100-character token
        $qrcodetoken = Str::random(100);

        // Create the invitation
        $invitation = Invitation::create([
            'user_id' => $user->id,
            'guest_name' => $request->guest_name,
            'description' => $request->description,
            'expire_at' => $request->expire_at,
            'status' => $request->status,
            'qrcodetoken' => $qrcodetoken,
        ]);

        // Generate QR code content as JSON
        $qrContent = json_encode([
            'host_name' => $user->name,
            'host_email' => $user->email,
            'guest_name' => $invitation->guest_name,
            'description' => $invitation->description,
            'expire_at' => $invitation->expire_at,
            'status' => $invitation->status,
            'qrcodetoken' => $invitation->qrcodetoken,
        ]);

        // Generate QR code image in SVG format
        $qrCodeImage = QrCode::format('svg')->size(200)->generate($qrContent);

        // Define file name with invitation ID
        $fileName = 'invitations/' . $invitation->id . '_qrcode.svg';

        // Save QR code image to public storage
        Storage::disk('public')->put($fileName, $qrCodeImage);

        // Save QR code path to the invitation record
        $invitation->qrcode = $fileName;
        $invitation->save();

        // Redirect back with success message
        return redirect()->route('invitations.index')->with([
            'status' => 'Invitation created and QR code generated successfully!',
        ]);
    }

    // Show the edit form for an invitation
    public function edit($id)
    {
        $invitation = Invitation::findOrFail($id);
        return view('invitations.edit', compact('invitation'));
    }

    // Update an invitation
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'description' => 'required|string',
            'expire_at' => 'required|date|after_or_equal:now',
            'status' => 'required|in:active,inactive',
        ]);

        // Find the invitation
        $invitation = Invitation::findOrFail($id);

        // Update the invitation
        $invitation->update([
            'guest_name' => $request->guest_name,
            'description' => $request->description,
            'expire_at' => $request->expire_at,
            'status' => $request->status,
        ]);

        // Redirect back with success message
        return redirect()->route('invitations.index')->with([
            'status' => 'Invitation updated successfully!',
        ]);
    }

    // Delete an invitation
    public function destroy($id)
    {
        $invitation = Invitation::findOrFail($id);

        // Delete the QR code file if it exists
        if ($invitation->qrcode && Storage::exists('public/' . $invitation->qrcode)) {
            Storage::delete('public/' . $invitation->qrcode);
        }

        // Delete the invitation
        $invitation->delete();

        // Redirect back with success message
        return redirect()->route('invitations.index')->with([
            'status' => 'Invitation deleted successfully!',
        ]);
    }

    // Share the invitation
    public function share($id)
    {
        // Update expired invitations before sharing
        $this->updateExpiredInvitations();
        
        $invitation = Invitation::findOrFail($id);
        return view('invitations.share', compact('invitation'));
    }
}