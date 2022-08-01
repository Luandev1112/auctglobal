<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a71a5f51ca5bInternalNotificationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('internal_notification_user')) {
            Schema::create('internal_notification_user', function (Blueprint $table) {
                $table->integer('internal_notification_id')->unsigned()->nullable();
                $table->foreign('internal_notification_id', 'fk_p_113336_113328_user_i_5a71a5f51cb34')->references('id')->on('internal_notifications')->onDelete('cascade');
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', 'fk_p_113328_113336_intern_5a71a5f51cbb5')->references('id')->on('users')->onDelete('cascade');
                $table->timestamp("read_at")->nullable();
		$table->timestamp("created_at")->default(DB::raw("CURRENT_TIMESTAMP"));
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
        Schema::dropIfExists('internal_notification_user');
    }
}
