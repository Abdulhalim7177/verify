<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventSecurityAccessOthers
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
        // If the user is logged in as security, redirect them away from user/admin routes
        if (Auth::guard('security')->check()) {
            return redirect()->route('security.dashboard')->with('error', 'Security personnel cannot access user or admin pages.');
        }

        return $next($request);
    }
}