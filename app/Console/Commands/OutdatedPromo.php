<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\timepromos;
use Illuminate\Console\Command;

class OutdatedPromo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'promo:expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete table promo if expired';

    /**
     * Execute the console command.
     *
     * @return void
     */

    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        timepromos::where('end_promo', '<', Carbon::now())->each(function ($item) {
            $item->delete();
        });
        $this->info('table has been successfully deleted');
    }

}
