<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:security');
    }

    /**
     * Show the QR code scanning interface.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('security.scan.index');
    }

    /**
     * Process the QR code data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function processQrCode(Request $request)
    {
        try {
            $qrData = json_decode($request->input('qr_data'), true);
            
            if (!$qrData || !isset($qrData['type']) || !isset($qrData['id'])) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid QR code format',
                ], 400);
            }

            // Process based on QR code type
            if ($qrData['type'] === 'resident') {
                return $this->processResidentQrCode($qrData);
            } elseif ($qrData['type'] === 'invitation') {
                return $this->processInvitationQrCode($qrData);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Unknown QR code type',
                ], 400);
            }
        } catch (\Exception $e) {
            Log::error('QR Code Processing Error: ' . $e->getMessage());
            
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to process QR code: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Process resident QR code.
     *
     * @param  array  $qrData
     * @return \Illuminate\Http\JsonResponse
     */
    private function processResidentQrCode($qrData)
    {
        $userId = $qrData['id'];
        $user = User::find($userId);

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Resident not found',
            ], 404);
        }

        // Log this scan
        Log::info('Resident QR code scanned', [
            'resident_id' => $user->id,
            'resident_name' => $user->name,
            'scanner_id' => auth()->guard('security')->id(),
            'scanner_name' => auth()->guard('security')->user()->name,
            'timestamp' => now(),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Resident verified successfully',
            'data' => [
                'type' => 'resident',
                'name' => $user->name,
                'email' => $user->email,
                'status' => 'Valid Resident',
                'timestamp' => now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }

    /**
     * Process invitation QR code.
     *
     * @param  array  $qrData
     * @return \Illuminate\Http\JsonResponse
     */
    private function processInvitationQrCode($qrData)
    {
        $invitationId = $qrData['id'];
        $invitation = Invitation::find($invitationId);

        if (!$invitation) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invitation not found',
            ], 404);
        }

        // Check if invitation is valid (not expired)
        $isValid = now()->lt($invitation->event_date) || 
                  (now()->format('Y-m-d') === $invitation->event_date->format('Y-m-d'));
        
        // Check if invitation has been used already
        $alreadyUsed = $invitation->used_at !== null;

        // If valid and not used, mark as used
        if ($isValid && !$alreadyUsed) {
            $invitation->used_at = now();
            $invitation->save();
        }

        // Get the host information
        $host = User::find($invitation->user_id);
        $hostName = $host ? $host->name : 'Unknown Host';

        // Log this scan
        Log::info('Invitation QR code scanned', [
            'invitation_id' => $invitation->id,
            'guest_name' => $invitation->guest_name,
            'host_id' => $invitation->user_id,
            'host_name' => $hostName,
            'event_date' => $invitation->event_date,
            'is_valid' => $isValid,
            'is_used' => $alreadyUsed,
            'scanner_id' => auth()->guard('security')->id(),
            'scanner_name' => auth()->guard('security')->user()->name,
            'timestamp' => now(),
        ]);

        return response()->json([
            'status' => $isValid ? ($alreadyUsed ? 'warning' : 'success') : 'error',
            'message' => $this->getInvitationStatusMessage($isValid, $alreadyUsed),
            'data' => [
                'type' => 'invitation',
                'guest_name' => $invitation->guest_name,
                'host_name' => $hostName,
                'event_date' => $invitation->event_date->format('Y-m-d'),
                'event_time' => $invitation->event_time ?? 'Any time',
                'status' => $this->getInvitationStatus($isValid, $alreadyUsed),
                'used_at' => $invitation->used_at ? $invitation->used_at->format('Y-m-d H:i:s') : null,
                'timestamp' => now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }

    /**
     * Get invitation status message.
     *
     * @param  bool  $isValid
     * @param  bool  $alreadyUsed
     * @return string
     */
    private function getInvitationStatusMessage($isValid, $alreadyUsed)
    {
        if (!$isValid) {
            return 'Invitation has expired';
        }
        
        if ($alreadyUsed) {
            return 'Invitation already used';
        }
        
        return 'Invitation verified successfully';
    }

    /**
     * Get invitation status.
     *
     * @param  bool  $isValid
     * @param  bool  $alreadyUsed
     * @return string
     */
    private function getInvitationStatus($isValid, $alreadyUsed)
    {
        if (!$isValid) {
            return 'Expired';
        }
        
        if ($alreadyUsed) {
            return 'Already Used';
        }
        
        return 'Valid';
    }

    /**
     * Show scan result page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showResult()
    {
        return view('security.scan.result');
    }
}