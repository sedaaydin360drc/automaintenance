<?php

namespace Sedaaydin360drc\Automaintenance;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

class ScheduleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->afterResolving(Schedule::class, function (Schedule $schedule) {
            /*test deneme*/
            if(env('MAINTENANCE_MODE_DOWN') && env('MAINTENANCE_MODE_DOWN') !== null && env('MAINTENANCE_MODE_UP') && env('MAINTENANCE_MODE_UP') !== null) {
                $schedule->command('down')
                    ->cron(env('MAINTENANCE_MODE_DOWN'))
                    ->timezone('Europe/Istanbul')
                    ->evenInMaintenanceMode();
                $schedule->command('up')
                    ->cron(env('MAINTENANCE_MODE_UP'))
                    ->timezone('Europe/Istanbul')
                    ->evenInMaintenanceMode();
            }
        });
    }
}
