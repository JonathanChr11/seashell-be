<?php

namespace App\Console\Commands;

use App\Models\Couponts;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class ExpiredCoupont extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'items:expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'items:expired';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Couponts::where('expired_at', '<', Carbon::now())->each(function ($item) {
            $item->delete();
        });
    }
}
