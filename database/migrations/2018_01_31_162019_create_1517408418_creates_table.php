<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517408418CreatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('creates')) {
            Schema::create('creates', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('description')->nullable();
                $table->datetime('start_date')->nullable();
                $table->datetime('end_date')->nullable();
                $table->decimal('minimum_bid', 15, 2)->nullable();
                $table->decimal('reserve_price', 15, 2)->nullable();
                $table->decimal('buy_now_price', 15, 2)->nullable();
                $table->decimal('bid_increment', 15, 2)->nullable();
                $table->string('shipping_conditions');
                $table->tinyInteger('international_shipping')->nullable()->default(0);
                $table->text('shipping_terms')->nullable();
                $table->tinyInteger('make_featured')->nullable()->default(0);
                $table->enum('status', array('new', 'open', 'suspended', 'closed'))->nullable();
                
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
        Schema::dropIfExists('creates');
    }
}
