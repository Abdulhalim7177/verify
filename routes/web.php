<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ResidentQRCodeController; // Add the new controller
use App\Http\Controllers\InvitationController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/calendar', [App\Http\Controllers\HomeController::class, 'calendar'])->name('calendar');

// Profile routes
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// QR Code Generation Route
Route::post('/resident/qrcode/generate', [ResidentQRCodeController::class, 'generateQRCode'])->name('resident.qrcode.generate');

// Invitation routes
// Invitation routes
Route::get('/invitations', [InvitationController::class, 'index'])->name('invitations.index');
Route::get('/invitations/create', [InvitationController::class, 'create'])->name('invitations.create');
Route::post('/invitations', [InvitationController::class, 'store'])->name('invitations.store');
Route::get('/invitations/{id}/edit', [InvitationController::class, 'edit'])->name('invitations.edit');
Route::put('/invitations/{id}', [InvitationController::class, 'update'])->name('invitations.update');
Route::delete('/invitations/{id}', [InvitationController::class, 'destroy'])->name('invitations.destroy');
Route::get('/invitations/share/{id}', [InvitationController::class, 'share'])->name('invitations.share');


// QR Code Scanning Routes
Route::get('/scan', [ProfileController::class, 'showScanForm'])->name('scan.form');
Route::post('/scan/process', [ProfileController::class, 'processScan'])->name('scan.process');
Route::get('/scan/result', function () {
    return view('scan.result'); // Updated view path
})->name('scan.result');