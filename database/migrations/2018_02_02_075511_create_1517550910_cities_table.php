<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517550910CitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('cities')) {
            Schema::create('cities', function (Blueprint $table) {
                $table->increments('id');
                $table->string('city')->nullable();
                $table->string('country_address')->nullable();
                $table->double('country_latitude')->nullable();
                $table->double('country_longitude')->nullable();
                $table->string('state_address')->nullable();
                $table->double('state_latitude')->nullable();
                $table->double('state_longitude')->nullable();
                
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
        Schema::dropIfExists('cities');
    }
}
