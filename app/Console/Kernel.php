<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [

        Commands\CustomCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $timezone = getSetting('system_timezone','site_settings');
        $cron_run_time = getSetting('cron_jobs_run','auction_settings');

        if ($cron_run_time=='five_mins')
            $schedule->command('auction')->everyFiveMinutes()->timezone($timezone);
        elseif ($cron_run_time=='hourly')
            $schedule->command('auction')->hourly()->timezone($timezone);
        elseif ($cron_run_time=='daily')
            $schedule->command('auction')->daily()->timezone($timezone);
        elseif ($cron_run_time=='weekly')
            $schedule->command('auction')->weekly()->timezone($timezone);
        elseif ($cron_run_time=='monthly')
            $schedule->command('auction')->monthly()->timezone($timezone);
        else
            $schedule->command('auction')->daily()->timezone($timezone);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
