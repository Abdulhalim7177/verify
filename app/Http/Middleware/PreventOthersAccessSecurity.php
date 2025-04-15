<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventOthersAccessSecurity
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
        // If the user is logged in as a regular user or admin, redirect them away from security routes
        if (Auth::guard('web')->check()) {
            return redirect()->route('home')->with('error', 'You do not have access to security pages.');
        }

        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard')->with('error', 'Admin users cannot access security pages.');
        }

        return $next($request);
    }
}