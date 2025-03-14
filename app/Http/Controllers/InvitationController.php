<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InvitationController extends Controller
{
    // Show all invitations for the authenticated user
    public function index()
    {
        $invitations = Auth::user()->invitations; // Get invitations for the logged-in user
        return view('invitations.index', compact('invitations'));
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
            'guest_phone' => 'required|string|max:20',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Create the invitation
        $invitation = Invitation::create([
            'user_id' => $user->id,
            'guest_name' => $request->guest_name,
            'guest_phone' => $request->guest_phone,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'status' => $request->status,
        ]);

        // Generate QR code content as JSON
        $qrContent = json_encode([
            'host_name' => $user->name,
            'host_email' => $user->email,
            'host_phone' => $user->phone,
            'host_altphone' => $user->altphone,
            'host_address' => $user->address,
            'guest_name' => $invitation->guest_name,
            'guest_phone' => $invitation->guest_phone,
            'description' => $invitation->description,
            'date' => $invitation->date,
            'time' => $invitation->time,
            'status' => $invitation->status,
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
            'guest_phone' => 'required|string|max:20',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        // Find the invitation
        $invitation = Invitation::findOrFail($id);

        // Update the invitation
        $invitation->update([
            'guest_name' => $request->guest_name,
            'guest_phone' => $request->guest_phone,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
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
        $invitation = Invitation::findOrFail($id);
        return view('invitations.share', compact('invitation'));
    }
}