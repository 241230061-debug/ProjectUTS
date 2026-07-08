<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// 1. Buat instance application terlebih dahulu ke dalam variabel $app
$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        // ALIAS MIDDLEWARE KAMU
        $middleware->alias([
            'ensureuserisadmin' => \App\Http\Middleware\EnsureUserIsAdmin::class, 
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

// 2. Paksa pindah folder storage ke /tmp milik Vercel sebelum app di-return
if (isset($_SERVER['VERCEL_URL'])) {
    $app->useStoragePath('/tmp/storage');
}

return $app;