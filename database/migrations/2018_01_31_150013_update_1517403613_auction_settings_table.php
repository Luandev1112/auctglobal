<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1517403613AuctionSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auction_settings', function (Blueprint $table) {
            
if (!Schema::hasColumn('auction_settings', 'bidder_privacy')) {
                $table->string('bidder_privacy');
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auction_settings', function (Blueprint $table) {
            $table->dropColumn('bidder_privacy');
            
        });

    }
}
