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
use App\Http\Controllers\Admin\InvitationController as AdminInvitationController;
use App\Http\Middleware\AdminGuard;
// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Auth::routes();

// Authenticated User Routes
Route::middleware('auth')->group(function () {
    // Home Routes
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');

    // Profile Routes
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // QR Code Routes
    Route::post('/resident/qrcode/generate', [ResidentQRCodeController::class, 'generateQRCode'])
        ->name('resident.qrcode.generate');
    Route::get('/scan', [ProfileController::class, 'showScanForm'])->name('scan.form');
    Route::post('/scan/process', [ProfileController::class, 'processScan'])->name('scan.process');
    Route::get('/scan/result', function () {
        return view('scan.result');
    })->name('scan.result');

    // Invitation Routes
    Route::prefix('invitations')->group(function () {
        Route::get('/', [InvitationController::class, 'index'])->name('invitations.index');
        Route::get('/create', [InvitationController::class, 'create'])->name('invitations.create');
        Route::post('/', [InvitationController::class, 'store'])->name('invitations.store');
        Route::get('/{invitation}/edit', [InvitationController::class, 'edit'])->name('invitations.edit');
        Route::put('/{invitation}', [InvitationController::class, 'update'])->name('invitations.update');
        Route::delete('/{invitation}', [InvitationController::class, 'destroy'])->name('invitations.destroy');
        Route::get('/share/{invitation}', [InvitationController::class, 'share'])->name('invitations.share');
    });
});



Route::prefix('admin')->group(function () {
    // Admin Guest Routes (Only accessible if NOT logged in as admin)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/', [AdminLoginController::class, 'login']);
    });

    // Admin Authenticated Routes (Only accessible if logged in as admin)
    Route::middleware(['auth:admin', AdminGuard::class])->group(function () {
        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // User Management
        Route::resource('/users', AdminUserController::class)
            ->names('admin.users');

        // Invitation Management
        Route::prefix('invitations')->group(function () {
            Route::get('/', [AdminInvitationController::class, 'index'])->name('admin.invitations.index');
            Route::get('/{invitation}', [AdminInvitationController::class, 'show'])->name('admin.invitations.show');
            Route::put('/{invitation}', [AdminInvitationController::class, 'update'])->name('admin.invitations.update');
            Route::delete('/{invitation}', [AdminInvitationController::class, 'destroy'])->name('admin.invitations.destroy');
            Route::post('/{invitation}/regenerate-qr', [AdminInvitationController::class, 'regenerateQr'])
                ->name('admin.invitations.regenerate-qr');
        });
    });
});
