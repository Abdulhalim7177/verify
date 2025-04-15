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
use App\Http\Controllers\Security\Auth\LoginController as SecurityLoginController;
use App\Http\Controllers\Security\DashboardController as SecurityDashboardController;
use App\Http\Middleware\AdminGuard;
use App\Http\Middleware\SecurityGuard;
use App\Http\Middleware\PreventAdminAccessUser;
use App\Http\Middleware\PreventUserAccessAdmin;
use App\Http\Middleware\PreventSecurityAccessOthers;
use App\Http\Middleware\PreventOthersAccessSecurity;

// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Auth::routes();

// Authenticated User Routes
Route::middleware(['auth', PreventAdminAccessUser::class, PreventSecurityAccessOthers::class])->group(function () {
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

// Admin Routes
Route::prefix('admin')->group(function () {
    // Admin Guest Routes (Only accessible if NOT logged in as admin)
    Route::middleware(['guest:admin', PreventUserAccessAdmin::class, PreventSecurityAccessOthers::class])->group(function () {
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

// Security Routes
Route::prefix('security')->group(function () {
    // Security Guest Routes (Only accessible if NOT logged in as security)
    Route::middleware(['guest:security', PreventUserAccessAdmin::class, PreventAdminAccessUser::class])->group(function () {
        Route::get('/', [SecurityLoginController::class, 'showLoginForm'])->name('security.login');
        Route::post('/', [SecurityLoginController::class, 'login']);
    });

    // Security Authenticated Routes (Only accessible if logged in as security)
    Route::middleware(['auth:security', SecurityGuard::class])->group(function () {
        Route::post('/logout', [SecurityLoginController::class, 'logout'])->name('security.logout');
        Route::get('/dashboard', [SecurityDashboardController::class, 'index'])->name('security.dashboard');
        
        // Add more security-specific routes here as needed
        
        // Example: Security scan route
        Route::get('/scan', function () {
            return view('security.scan.index');
        })->name('security.scan');
        
        // Example: Security verification route
        Route::post('/verify', function () {
            // Verification logic
            return back()->with('success', 'Verification successful');
        })->name('security.verify');
    });
});