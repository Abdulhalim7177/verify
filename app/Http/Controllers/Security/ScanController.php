<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use App\Models\ScanLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ScanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:security');
    }

    // Show the QR code scanning interface
    public function index()
    {
        return view('security.scan.index');
    }

    // Process the QR code data
    public function processQrCode(Request $request)
    {
        try {
            $qrData = $this->extractQrData($request);

            if (!$qrData || !isset($qrData['type']) || !isset($qrData['id'])) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid QR code format',
                ], 400);
            }

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
                'message' => 'Failed to process QR code',
            ], 500);
        }
    }

    // Extract QR data from request
    private function extractQrData(Request $request)
    {
        if ($request->has('qr_data')) {
            $rawData = $request->input('qr_data');
            return is_string($rawData) ? json_decode($rawData, true) : $rawData;
        } elseif ($request->hasFile('qr_image')) {
            // Placeholder for QR image processing
            return null;
        }
        return null;
    }

    // Process resident QR code
    private function processResidentQrCode($qrData)
    {
        $user = User::find($qrData['id']);
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Resident not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Resident verified successfully',
            'data' => [
                'name' => $user->name,
                'email' => $user->email,
            ],
        ]);
    }

    // Process invitation QR code
    private function processInvitationQrCode($qrData)
    {
        $invitation = Invitation::find($qrData['id']);
        if (!$invitation) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invitation not found',
            ], 404);
        }

        $isValid = Carbon::now()->lt($invitation->expire_at);
        if (!$isValid) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invitation has expired',
            ], 400);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Invitation verified successfully',
            'data' => [
                'guest_name' => $invitation->guest_name,
                'description' => $invitation->description,
                'expire_at' => $invitation->expire_at,
            ],
        ]);
    }

    // Show scan history
    public function history()
    {
        $scans = ScanLog::where('scanner_type', 'security')
            ->where('scanner_id', Auth::id())
            ->orderBy('scanned_at', 'desc')
            ->paginate(15);

        return view('security.scan.history', compact('scans'));
    }
}
