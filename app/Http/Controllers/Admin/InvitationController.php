<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InvitationController extends Controller
{
    /**
     * Display all invitations with filters and analytics
     */
    public function index(Request $request)
    {
        // First update any expired invitations
        $this->updateExpiredInvitations();
        
        $query = Invitation::with('user')->latest();
        
        // Apply filters
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }
        
        if ($request->filled('date_range')) {
            [$start, $end] = explode(' - ', $request->date_range);
            $query->whereBetween('created_at', [
                Carbon::parse($start)->startOfDay(),
                Carbon::parse($end)->endOfDay()
            ]);
        }

        $invitations = $query->paginate(10);
        $users = User::all(); // For user filter dropdown
        
        // Improved analytics data
        $now = Carbon::now();
        $analytics = [
            'total' => Invitation::count(),
            'active' => Invitation::where('status', 'active')->count(),
            'expired' => Invitation::where('status', 'inactive')
                                ->where('expire_at', '<', $now)
                                ->count(),
            'upcoming' => Invitation::where('status', 'active')
                                  ->where('expire_at', '>', $now)
                                  ->count(),
            'today' => Invitation::whereDate('created_at', today())->count()
        ];

        return view('admin.invitations.index', compact('invitations', 'users', 'analytics'));
    }

    /**
     * Update expired invitations
     */
    private function updateExpiredInvitations()
    {
        $now = Carbon::now();
        
        Invitation::where('status', 'active')
                 ->where('expire_at', '<', $now)
                 ->update(['status' => 'inactive']);
    }

    /**
     * Show invitation details
     */
    public function show(Invitation $invitation)
    {
        return view('admin.invitations.show', compact('invitation'));
    }

    /**
     * Update invitation status
     */
    public function update(Request $request, Invitation $invitation)
    {
        $validated = $request->validate([
            'status' => 'required|in:active,inactive',
            'guest_name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'expire_at' => 'sometimes|required|date|after_or_equal:now'
        ]);

        $invitation->update($validated);

        return back()->with('success', 'Invitation updated successfully!');
    }

    /**
     * Delete an invitation
     */
    public function destroy(Invitation $invitation)
    {
        // Delete QR code if exists
        if ($invitation->qrcode && Storage::exists('public/' . $invitation->qrcode)) {
            Storage::delete('public/' . $invitation->qrcode);
        }

        $invitation->delete();

        return redirect()->route('admin.invitations.index')
            ->with('success', 'Invitation deleted successfully');
    }

    /**
     * Regenerate QR code
     */
    public function regenerateQr(Invitation $invitation)
    {
        $qrContent = json_encode([
            'host_name' => $invitation->user->name,
            'host_email' => $invitation->user->email,
            'guest_name' => $invitation->guest_name,
            'description' => $invitation->description,
            'expire_at' => $invitation->expire_at,
            'status' => $invitation->status,
            'token' => $invitation->qrcodetoken ?? Str::random(100)
        ]);

        $fileName = 'invitations/' . $invitation->id . '_qrcode.svg';
        $qrCodeImage = QrCode::format('svg')->size(200)->generate($qrContent);
        
        // Delete old QR code if exists
        if ($invitation->qrcode && Storage::exists('public/' . $invitation->qrcode)) {
            Storage::delete('public/' . $invitation->qrcode);
        }
        
        Storage::disk('public')->put($fileName, $qrCodeImage);
        $invitation->update(['qrcode' => $fileName]);

        return back()->with('success', 'QR Code regenerated!');
    }
}