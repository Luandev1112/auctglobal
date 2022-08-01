<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1517403274SiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_settings', function (Blueprint $table) {
            
if (!Schema::hasColumn('site_settings', 'default_language')) {
                $table->string('default_language');
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
            $table->dropColumn('default_language');
            
        });

    }
}
