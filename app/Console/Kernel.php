<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {
    /**
     * Register the commands for the application.
     */
    protected
    function commands(): void {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }

    /**
     * Define the application's command schedule.
     */
    /*protected
    function schedule(
        Schedule $schedule,
    ): void {}*/
}
