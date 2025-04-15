<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventUserAccessAdmin
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
        // If the user is logged in as a regular user, redirect them away from admin routes
        if (Auth::guard('web')->check()) {
            return redirect()->route('home')->with('error', 'You do not have access to admin pages.');
        }

        return $next($request);
    }
}