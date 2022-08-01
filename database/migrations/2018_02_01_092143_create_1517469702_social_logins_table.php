<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517469702SocialLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('social_logins')) {
            Schema::create('social_logins', function (Blueprint $table) {
                $table->increments('id');
                $table->string('facebook_client_id');
                $table->string('facebook_client_secret');
                $table->string('facebook_redirect_url');
                $table->string('facebook_login_enable')->nullable();
                $table->string('google_client_id');
                $table->string('google_client_secret')->nullable();
                $table->string('google_redirect_url')->nullable();
                $table->string('google_login_enable')->nullable();
                
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
        Schema::dropIfExists('social_logins');
    }
}
