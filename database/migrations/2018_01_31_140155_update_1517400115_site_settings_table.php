<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1517400115SiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_settings', function (Blueprint $table) {
            
if (!Schema::hasColumn('site_settings', 'results_shown_per_page')) {
                $table->integer('results_shown_per_page')->nullable();
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
            $table->dropColumn('results_shown_per_page');
            
        });

    }
}
