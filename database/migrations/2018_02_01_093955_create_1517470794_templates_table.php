<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1517470794TemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('templates')) {
            Schema::create('templates', function (Blueprint $table) {
                $table->increments('id');
                $table->string('key');
                $table->enum('type', array('Content', 'Header', 'Footer'));
                $table->string('subject');
                $table->string('from_email')->nullable();
                $table->string('from_name')->nullable();
                $table->text('content');
                
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
        Schema::dropIfExists('templates');
    }
}
