<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a71a38c3410dPermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('permission_role')) {
            Schema::create('permission_role', function (Blueprint $table) {
                $table->integer('permission_id')->unsigned()->nullable();
                $table->foreign('permission_id', 'fk_p_113326_113327_role_p_5a71a38c34255')->references('id')->on('permissions')->onDelete('cascade');
                $table->integer('role_id')->unsigned()->nullable();
                $table->foreign('role_id', 'fk_p_113327_113326_permis_5a71a38c3431c')->references('id')->on('roles')->onDelete('cascade');
                
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
        Schema::dropIfExists('permission_role');
    }
}
