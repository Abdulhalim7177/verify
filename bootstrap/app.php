<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\PreventAdminAccessUser;
use App\Http\Middleware\PreventUserAccessAdmin;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        return [ 
            'prevent.user.admin' => PreventUserAccessAdmin::class,
            'security.guard' => SecurityGuard::class,
            'prevent.security.others' => PreventSecurityAccessOthers::class,
            'prevent.others.security' => PreventOthersAccessSecurity::class,

            ];
        })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
