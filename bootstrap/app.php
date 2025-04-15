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
        // Add your middleware aliases here
        'prevent.admin.user' => PreventAdminAccessUser::class,
        'prevent.user.admin' => PreventUserAccessAdmin::class,
        // ... other middleware aliases
            ];
        })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
