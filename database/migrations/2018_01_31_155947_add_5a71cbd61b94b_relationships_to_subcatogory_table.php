<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a71cbd61b94bRelationshipsToSubCatogoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_catogories', function(Blueprint $table) {
            if (!Schema::hasColumn('sub_catogories', 'category_id')) {
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', '113377_5a71cbd3e80a1')->references('id')->on('categories')->onDelete('cascade');
                }
                if (!Schema::hasColumn('sub_catogories', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '113377_5a71cbd3f0280')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('sub_catogories', function(Blueprint $table) {
            
        });
    }
}
