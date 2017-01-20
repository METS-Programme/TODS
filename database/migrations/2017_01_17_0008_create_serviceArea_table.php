<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_area', function (Blueprint $table){
            $table->increments('servicearea_id');
            $table->string('name');
            $table->string('description');
            $table->unsignedInteger('healthfacility_id');
            $table->foreign('healthfacility_id')->references('healthfacility_id')->on('health_facility');
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
        Schema::drop('service_area');
    }
}
