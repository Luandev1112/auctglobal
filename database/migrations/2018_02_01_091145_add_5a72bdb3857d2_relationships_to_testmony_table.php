<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a72bdb3857d2RelationshipsToTestmonyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testmonies', function(Blueprint $table) {
            if (!Schema::hasColumn('testmonies', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', '113566_5a72bdb16fd06')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('testmonies', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '113566_5a72bdb17bc4d')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('testmonies', function(Blueprint $table) {
            
        });
    }
}
