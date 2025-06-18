<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Tambahkan middleware custom Anda di sini
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
}