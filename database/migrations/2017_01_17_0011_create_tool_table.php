<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table){
           $table->increments('tools_id');
           $table->string ('name');
           $table->string ('code');
           $table->string('specification');
           $table->string('service_area');
           $table->string('description');
           $table->unsignedInteger('package_id');
           $table->unsignedInteger('toolspicked_id');
           $table->unsignedInteger('servicearea_id');
           $table->foreign('package_id')->references('package_id')-> on ('packaging');
           $table->foreign('toolspicked_id')->references('toolspicked_id')->on('tools_picked');
           $table->foreign('servicearea_id')->references('servicearea_id')->on('service_area');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tools');
    }
}
