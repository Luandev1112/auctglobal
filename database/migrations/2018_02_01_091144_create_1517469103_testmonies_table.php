<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517469103TestmoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('testmonies')) {
            Schema::create('testmonies', function (Blueprint $table) {
                $table->increments('id');
                $table->text('testmony')->nullable();
                $table->enum('status', array('Active', 'Inactive'));
                
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
        Schema::dropIfExists('testmonies');
    }
}
