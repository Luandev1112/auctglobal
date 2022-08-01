<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1517400290SiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_settings', function (Blueprint $table) {
            
if (!Schema::hasColumn('site_settings', 'users_confirmation_method')) {
                $table->string('users_confirmation_method');
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn('users_confirmation_method');
            
        });

    }
}
