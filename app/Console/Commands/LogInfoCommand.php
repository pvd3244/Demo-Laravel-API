<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LogInfoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:log-info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command auto log info';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Log::info('Hien tai la: ' . now());
        return 0;
    }
}
