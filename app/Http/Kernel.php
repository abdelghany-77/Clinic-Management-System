<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Console\Scheduling\Schedule;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'no_cache' => \App\Http\Middleware\NoCacheMiddleware::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->call('App\Http\Controllers\AdminController@sendReminders')->dailyAt('08:00');
    }
}
