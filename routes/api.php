<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\Security\ScanHistoryController;

// Return JSON share info
Route::get('invitations/share/{token}', [InvitationController::class, 'shareApi'])
->name('api.invitations.share');

// Verify token & return JSON payload
Route::post('invitations/verify', [InvitationController::class, 'verifyApi'])
->name('api.invitations.verify');

// Optionally: list scan logs as JSON
Route::get('scanlogs', [InvitationController::class, 'logsApi'])
->name('api.scanlogs.index');