<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517471352CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('create_letters')) {
            Schema::create('create_letters', function (Blueprint $table) {
                $table->increments('id');
                $table->enum('to', array('All', 'Bidders', 'Sellers', 'Subscribers'))->nullable();
                $table->string('title');
                $table->text('message');
                
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
        Schema::dropIfExists('create_letters');
    }
}
