<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517399605AuctionSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('auction_settings')) {
            Schema::create('auction_settings', function (Blueprint $table) {
                $table->increments('id');
                $table->string('allow_custom_increments');
                $table->integer('hours_until_auction_ends_count_down')->nullable()->unsigned();
                $table->string('enable_featured_items')->nullable();
                $table->string('enable_auctions_auto_extension');
                $table->integer('extend_auction_by')->nullable();
                $table->integer('during_the_last')->nullable();
                $table->string('activate_picture_gallery');
                $table->integer('max_number_of_pictures')->nullable();
                $table->integer('max_pictures_size')->nullable();
                $table->integer('thumbnails_size')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auction_settings');
    }
}
