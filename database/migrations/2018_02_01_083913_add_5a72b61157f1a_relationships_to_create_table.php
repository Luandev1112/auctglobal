<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a72b61157f1aRelationshipsToCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('creates', function(Blueprint $table) {
            if (!Schema::hasColumn('creates', 'category_id')) {
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', '113380_5a71d0a4dc349')->references('id')->on('categories')->onDelete('cascade');
                }
                if (!Schema::hasColumn('creates', 'sub_category_id')) {
                $table->integer('sub_category_id')->unsigned()->nullable();
                $table->foreign('sub_category_id', '113380_5a71d0a4e84ed')->references('id')->on('sub_catogories')->onDelete('cascade');
                }
                if (!Schema::hasColumn('creates', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '113380_5a71d0a4f3fed')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('creates', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', '113380_5a71d1f3a263a')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('creates', function(Blueprint $table) {
            
        });
    }
}
