<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517406285PaypalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('paypals')) {
            Schema::create('paypals', function (Blueprint $table) {
                $table->increments('id');
                $table->string('is_enabled')->nullable();
                $table->string('paypal_email_address');
                $table->enum('mode', array('sandbox', 'live'));
                
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
        Schema::dropIfExists('paypals');
    }
}
