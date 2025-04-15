<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventAdminAccessUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // If the user is logged in as admin, redirect them away from user routes
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard')->with('error', 'Admin users cannot access user pages.');
        }

        return $next($request);
    }
}