<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustMiddleware;
use App\Http\Middleware\SalesMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'superAdmin' => AdminMiddleware::class,
            'sales' => SalesMiddleware::class,
            'cust' => CustMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
