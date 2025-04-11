<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ResidentQRCodeController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes (Web Guard)
Route::middleware('prevent.other.guard:web,/home')->group(function () {
    Auth::routes();
});

// Home Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

// QR Code Routes
Route::middleware('auth')->group(function () {
    Route::post('/resident/qrcode/generate', [ResidentQRCodeController::class, 'generateQRCode'])->name('resident.qrcode.generate');
    Route::get('/scan', [ProfileController::class, 'showScanForm'])->name('scan.form');
    Route::post('/scan/process', [ProfileController::class, 'processScan'])->name('scan.process');
    Route::get('/scan/result', function () {
        return view('scan.result');
    })->name('scan.result');
});

// Invitation Routes
Route::middleware('auth')->group(function () {
    Route::get('/invitations', [InvitationController::class, 'index'])->name('invitations.index');
    Route::get('/invitations/create', [InvitationController::class, 'create'])->name('invitations.create');
    Route::post('/invitations', [InvitationController::class, 'store'])->name('invitations.store');
    Route::get('/invitations/{id}/edit', [InvitationController::class, 'edit'])->name('invitations.edit');
    Route::put('/invitations/{id}', [InvitationController::class, 'update'])->name('invitations.update');
    Route::delete('/invitations/{id}', [InvitationController::class, 'destroy'])->name('invitations.destroy');
    Route::get('/invitations/share/{id}', [InvitationController::class, 'share'])->name('invitations.share');
});

// Admin Routes
Route::prefix('admin')->group(function () {

    // Admin Guest Routes (Only accessible if NOT logged in as admin)
    Route::middleware(['guest:admin', 'prevent.other.guard:admin,admin.dashboard'])->group(function () {
        Route::get('/', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/', [AdminLoginController::class, 'login']);
    });

    // Admin Authenticated Routes (Only accessible if logged in as admin)
    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('/users', AdminUserController::class)->names('admin.users');
    });

});
