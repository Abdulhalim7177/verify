<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\Security\ScanHistoryController;

// Group routes under the 'api' middleware
Route::middleware('api')->group(function () {
    // POST: Verify token
    Route::post('/invitations/verify', [InvitationController::class, 'verify'])
    ->name('api.invitations.verify');


    // GET: View scan logs
    Route::get('/scanlogs', [ScanHistoryController::class, 'index'])
        ->name('api.scanlogs.index');

    // GET: Show verify form (optional for API testing, mainly for web)
    Route::get('/invitations/verify-form', [InvitationController::class, 'showVerifyForm'])
        ->name('api.invitations.verify.form');
});