<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517550858StatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('states')) {
            Schema::create('states', function (Blueprint $table) {
                $table->increments('id');
                $table->string('state')->nullable();
                $table->string('country_address')->nullable();
                $table->double('country_latitude')->nullable();
                $table->double('country_longitude')->nullable();
                
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
        Schema::dropIfExists('states');
    }
}
