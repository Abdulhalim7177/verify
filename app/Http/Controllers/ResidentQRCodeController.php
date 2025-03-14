<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ResidentQRCodeController extends Controller
{
    // Generate QR code for the authenticated user
    public function generateQRCode(Request $request)
    {
        $user = Auth::user();

        // Check if QR code already exists
        if ($user->qrcode) {
            return redirect()->route('home')->with([
                'status' => 'QR code has already been generated!',
            ]);
        }

        // Generate QR code content as JSON
        $qrContent = json_encode([
            'name' => $user->name,
            'role' => $user->role,
            'address' => $user->address,
            'phone' => $user->phone,
            'altphone' => $user->altphone,
        ]);

        // Generate QR code image in SVG format
        $qrCodeImage = QrCode::format('svg')->size(200)->generate($qrContent);

        // Define file name with user ID
        $fileName = 'qrcodes/' . $user->id . '_qrcode.svg';

        // Save QR code image to public storage
        Storage::disk('public')->put($fileName, $qrCodeImage);

        // Save QR code path to the user record
        $user->qrcode = $fileName;
        $user->save();

        // Redirect to home with success message
        return redirect()->route('home')->with([
            'status' => 'QR code generated successfully!',
        ]);
    }
}