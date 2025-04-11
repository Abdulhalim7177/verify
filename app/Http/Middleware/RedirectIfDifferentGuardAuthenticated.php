<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfDifferentGuardAuthenticated
{
    public function handle(Request $request, Closure $next, $guard, $redirectTo)
    {
        $guards = ['web', 'admin'];

        foreach ($guards as $checkGuard) {
            if ($checkGuard !== $guard && Auth::guard($checkGuard)->check()) {
                if ($checkGuard === 'admin') {
                    return redirect()->route('admin.dashboard');
                } elseif ($checkGuard === 'web') {
                    return redirect($redirectTo); // e.g. /home
                }
            }
        }

        return $next($request);
    }
}
