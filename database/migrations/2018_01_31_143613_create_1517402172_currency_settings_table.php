<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517402172CurrencySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('currency_settings')) {
            Schema::create('currency_settings', function (Blueprint $table) {
                $table->increments('id');
                $table->string('site_currency');
                $table->string('money_format')->nullable();
                $table->integer('decimal_digits')->nullable();
                $table->string('symbol_position')->nullable();
                
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
        Schema::dropIfExists('currency_settings');
    }
}
