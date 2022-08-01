<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:auction';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Auction Status as Closed If END DATE crosses';

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
     * @return mixed
     */
    public function handle()
    {

        $cronjob    = getSetting('update_auction_status','auction_settings');

        if ($cronjob=='Yes') {

            $live_auctions =  DB::table('auctions')
                                 ->select(['auctions.id','auctions.start_date','auctions.end_date'])
                                 ->where('auctions.admin_status','approved')
                                 ->where('auctions.auction_status', '=', 'open')
                                 ->where('auctions.start_date','<=',DATE('Y-m-d'))
                                 ->where('auctions.end_date','>=',DATE('Y-m-d'));

           
            //start date time,end date time
            $now = strtotime(date('Y-m-d H:i:s'));

            if (count($live_auctions)) {

                foreach ($live_auctions as $auction) {

                    $start_date = strtotime($auction->start_date);
                    $end_date   = strtotime($auction->end_date);

                    if ($start_date<=$now && $end_date>=$now) {

                    } else {
                        //auction time is over
                        $auction->auction_status = 'closed';

                        $auction->save();
                    }

                }
            }
        }



        // DB::table('users')->where('active', 0)->delete();
        // $this->info('All inactive users are deleted successfully!');
    }
}
