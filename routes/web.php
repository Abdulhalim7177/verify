<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    PaymentController,
    InvitationController,
    SubscriptionController,
    ResidentQRCodeController,
    SubAccountController,
    Auth\ProfileController,
    Security\ScanController,
    Admin\UserController as AdminUserController,
    Admin\Auth\LoginController as AdminLoginController,
    Admin\DashboardController as AdminDashboardController,
    Admin\InvitationController as AdminInvitationController,
    Admin\TransactionController,
    Admin\PlanController,
    Admin\UserSubscriptionController,
    Security\Auth\LoginController as SecurityLoginController,
    Security\DashboardController as SecurityDashboardController,
};
use App\Http\Middleware\{
    AdminGuard,
    SecurityGuard,
    PreventAdminAccessUser,
    PreventUserAccessAdmin,
    PreventOthersAccessSecurity,
    PreventSecurityAccessOthers,
    EnsureUserHasActiveSubscription,
    PreventSubAccountActions,
};

// Welcome Page
Route::get('/', fn() => view('welcome'));

// Auth routes
Auth::routes();

// 🔒 Authenticated User Routes
Route::middleware(['auth', EnsureUserHasActiveSubscription::class, PreventAdminAccessUser::class, PreventSecurityAccessOthers::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');

    // Profile
    Route::prefix('profile')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
    });

    // Resident QR
    Route::prefix('resident/qrcode')->group(function () {
        Route::post('/generate', [ResidentQRCodeController::class, 'generateQRCode'])->name('resident.qrcode.generate');
    });

    // Scan
    Route::prefix('scan')->group(function () {
        Route::get('/', [ProfileController::class, 'showScanForm'])->name('scan.form');
        Route::post('/process', [ProfileController::class, 'processScan'])->name('scan.process');
        Route::get('/result', fn() => view('scan.result'))->name('scan.result');
    });

    // Invitations
    Route::prefix('invitations')->group(function () {
        Route::get('/', [InvitationController::class, 'index'])->name('invitations.index');
        Route::get('/create', [InvitationController::class, 'create'])->name('invitations.create');
        Route::post('/', [InvitationController::class, 'store'])->name('invitations.store');
        Route::get('/{invitation}/edit', [InvitationController::class, 'edit'])->name('invitations.edit');
        Route::put('/{invitation}', [InvitationController::class, 'update'])->name('invitations.update');
        Route::delete('/{invitation}', [InvitationController::class, 'destroy'])->name('invitations.destroy');
        Route::get('/share/{invitation}', [InvitationController::class, 'share'])->name('invitations.share');
    });

   

    // Sub-Account Dashboard
    Route::get('/subaccount/dashboard', function () {
        return auth()->user()->is_sub_account
            ? view('subaccounts.dashboard')
            : redirect('/home');
    })->name('subaccount.dashboard');

    // Sub-Accounts (only parent users)
    Route::middleware(PreventSubAccountActions::class)->group(function () {
        Route::resource('subaccounts', SubAccountController::class)->only([
            'index', 'create', 'store', 'update', 'destroy', 'edit'
        ]);
        
    });
});
 // Subscriptions
 Route::get('/subscriptions/show', [HomeController::class, 'show'])->name('subscriptions.show')->middleware(EnsureUserHasActiveSubscription::class);

 // Plans & Payments
 Route::get('/plans', [SubscriptionController::class, 'index'])->name('plans.index');
 Route::post('/subscribe/{plan}', [PaymentController::class, 'pay'])->name('pay');
 Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');







// 🔐 Invitation validation (outside auth)
Route::get('/invitations/validate/{token}', [InvitationController::class, 'validateInvitation'])->name('invitations.validate');
Route::get('/invitations/{id}/logs', [InvitationController::class, 'showLogs'])->name('invitations.logs');

// 🔒 Admin Routes
Route::prefix('admin')->group(function () {
    Route::middleware(['guest:admin', PreventUserAccessAdmin::class, PreventSecurityAccessOthers::class])->group(function () {
        Route::get('/', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/', [AdminLoginController::class, 'login']);
    });

    Route::middleware(['auth:admin', AdminGuard::class])->group(function () {
        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        Route::resource('/users', AdminUserController::class)->names('admin.users');

        // Admin Invitations
        Route::prefix('invitations')->group(function () {
            Route::get('/', [AdminInvitationController::class, 'index'])->name('admin.invitations.index');
            Route::get('/{invitation}', [AdminInvitationController::class, 'show'])->name('admin.invitations.show');
            Route::put('/{invitation}', [AdminInvitationController::class, 'update'])->name('admin.invitations.update');
            Route::delete('/{invitation}', [AdminInvitationController::class, 'destroy'])->name('admin.invitations.destroy');
            Route::post('/{invitation}/regenerate-qr', [AdminInvitationController::class, 'regenerateQr'])->name('admin.invitations.regenerate-qr');
        });

        // Admin Subscriptions
        Route::get('/subscriptions', [UserSubscriptionController::class, 'index'])->name('admin.subscriptions.index');
        Route::get('/subscriptions/assign', [UserSubscriptionController::class, 'create'])->name('admin.subscriptions.assign');
        Route::post('/subscriptions/assign', [UserSubscriptionController::class, 'store'])->name('admin.subscriptions.store');
        Route::post('/subscriptions/{subscription}/deactivate', [UserSubscriptionController::class, 'deactivate'])->name('admin.subscriptions.deactivate');

        // Admin Transactions
        Route::get('/transactions', [TransactionController::class, 'index'])->name('admin.transactions.index');

        // Admin Plans
        Route::resource('plans', PlanController::class)->names('admin.plans');


        // Admin Sub-Accounts View
        Route::get('/subaccounts', [\App\Http\Controllers\Admin\SubAccountController::class, 'index'])->name('admin.subaccounts.index');
    });
});




// 🔐 Security Routes
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
