<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventSubAccountActions
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->is_sub_account) {
            abort(403, 'Sub-accounts are not allowed to perform this action.');
        }

        return $next($request);
    }
}
