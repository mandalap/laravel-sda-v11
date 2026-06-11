<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Log;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'ensure.developer' => \App\Http\Middleware\EnsureDeveloperAccess::class,
            'prevent.duplicate.developer' => \App\Http\Middleware\PreventDuplicateDeveloperRegistration::class,
            'check.agency' => \App\Http\Middleware\CheckAgencyRegistration::class,
            'check.agency.registered' => \App\Http\Middleware\CheckAgencyAlreadyRegistered::class,
        ]);
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->command('installments:send-reminders')
            ->everyFiveMinutes()
            ->withoutOverlapping()
            ->onOneServer()
            ->onFailure(fn() => Log::error('[Scheduler] installments:send-reminders gagal.'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
