<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('app:create-fixture')->daily();

        //$schedule->command('app:create-league')->hourly();
        $schedule->command('app:create-standing')->daily()->between('01:00','02:00');
        $schedule->command('app:create-odd')->daily()->between('01:00','03:00');
        $schedule->command('app:live-score')->everyTenMinutes(); //livescore
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
