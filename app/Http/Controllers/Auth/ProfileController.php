<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Show the profile edit form
    public function edit()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    // Update the profile
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the request
        $request->validate([
            // 'name' => 'required|string|max:255',
            // 'role' => 'required|string|max:255',
            // 'street_address' => 'required|string|max:255',
            // 'house_number' => 'required|string|max:255',
            // 'phone' => 'required|string|max:20',
            'altphone' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update user details
        // $user->name = $request->name;
        // $user->role = $request->role;
        // $user->street_address = $request->street_address;
        // $user->house_number = $request->house_number;
        // $user->phone = $request->phone;
        $user->altphone = $request->altphone;

        // Handle profile image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image && Storage::exists('public/profile_images/' . $user->image)) {
                Storage::delete('public/profile_images/' . $user->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = basename($imagePath);
        }

        $user->save();

        // Stay on the profile edit page with success message and session flag
        return redirect()->route('profile.edit')->with([
            'status' => 'Profile updated successfully!',
            'show_qr_button' => true, // Flag to show the QR code generation button
        ]);
    }
}