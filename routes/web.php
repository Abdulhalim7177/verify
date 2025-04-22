<?php

use App\Http\Middleware\AdminGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SecurityGuard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InvitationController;
use App\Http\Middleware\PreventAdminAccessUser;
use App\Http\Middleware\PreventUserAccessAdmin;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Security\ScanController;
use App\Http\Controllers\ResidentQRCodeController;
use App\Http\Middleware\PreventOthersAccessSecurity;
use App\Http\Middleware\PreventSecurityAccessOthers;
use App\Http\Middleware\EnsureUserHasActiveSubscription;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\InvitationController as AdminInvitationController;
use App\Http\Controllers\Security\Auth\LoginController as SecurityLoginController;
use App\Http\Controllers\Security\DashboardController as SecurityDashboardController;

// Welcome Route
Route::get('/', fn() => view('welcome'));

// Authentication Routes
Auth::routes();

// Authenticated User Routes
Route::middleware(['auth', PreventAdminAccessUser::class, PreventSecurityAccessOthers::class,  EnsureUserHasActiveSubscription::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');

    Route::prefix('profile')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
    });

    Route::prefix('resident/qrcode')->group(function () {
        Route::post('/generate', [ResidentQRCodeController::class, 'generateQRCode'])->name('resident.qrcode.generate');
    });

    Route::prefix('scan')->group(function () {
        Route::get('/', [ProfileController::class, 'showScanForm'])->name('scan.form');
        Route::post('/process', [ProfileController::class, 'processScan'])->name('scan.process');
        Route::get('/result', fn() => view('scan.result'))->name('scan.result');
    });

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
    Route::middleware(['guest:admin', PreventUserAccessAdmin::class, PreventSecurityAccessOthers::class])->group(function () {
        Route::get('/', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/', [AdminLoginController::class, 'login']);
    });

    Route::middleware(['auth:admin', AdminGuard::class])->group(function () {
        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        Route::resource('/users', AdminUserController::class)->names('admin.users');

        Route::prefix('invitations')->group(function () {
            Route::get('/', [AdminInvitationController::class, 'index'])->name('admin.invitations.index');
            Route::get('/{invitation}', [AdminInvitationController::class, 'show'])->name('admin.invitations.show');
            Route::put('/{invitation}', [AdminInvitationController::class, 'update'])->name('admin.invitations.update');
            Route::delete('/{invitation}', [AdminInvitationController::class, 'destroy'])->name('admin.invitations.destroy');
            Route::post('/{invitation}/regenerate-qr', [AdminInvitationController::class, 'regenerateQr'])->name('admin.invitations.regenerate-qr');
        });
    });
});


Route::get('/invitations/validate/{token}', [InvitationController::class, 'validateInvitation'])
    ->name('invitations.validate');
Route::get('/invitations/{id}/logs', [InvitationController::class, 'showLogs'])
->name('invitations.logs');
    

// Security Routes
Route::prefix('security')->group(function () {
    Route::middleware(['guest:security', PreventUserAccessAdmin::class, PreventAdminAccessUser::class])->group(function () {
        Route::get('/', [SecurityLoginController::class, 'showLoginForm'])->name('security.login');
        Route::post('/', [SecurityLoginController::class, 'login']);
    });

    Route::middleware(['auth:security', SecurityGuard::class])->group(function () {
        Route::post('/logout', [SecurityLoginController::class, 'logout'])->name('security.logout');
        Route::get('/dashboard', [SecurityDashboardController::class, 'index'])->name('security.dashboard');

        Route::prefix('scan')->group(function () {
            Route::get('/', [ScanController::class, 'index'])->name('security.scan');
            Route::post('/process', [ScanController::class, 'processQrCode'])->name('security.scan.process');
            Route::get('/result', [ScanController::class, 'showResult'])->name('security.scan.result');
            Route::get('/history', [ScanController::class, 'history'])->name('security.scan.history');
        });

        Route::post('/verify', fn() => back()->with('success', 'Verification successful'))->name('security.verify');
    });
});






//user subscription routes

Route::middleware(['auth'])->group(function () {
    Route::get('/plans', [SubscriptionController::class, 'index'])->name('plans.index');
});

Route::post('/subscribe/{plan}', [PaymentController::class, 'pay'])->name('pay');

Route::middleware('auth')->group(function () {
    Route::post('/subscribe/{plan}', [PaymentController::class, 'pay'])->name('pay');
    Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
});

Route::middleware(['auth', EnsureUserHasActiveSubscription::class])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::middleware(['auth', EnsureUserHasActiveSubscription::class])->group(function () {
    Route::get('/subscriptions/show', [App\Http\Controllers\HomeController::class, 'show'])->name('subscriptions.show');
});