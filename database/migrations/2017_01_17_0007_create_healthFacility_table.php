<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_facility', function (Blueprint $table){
            $table->increments('healthfacility_id');
            $table->string('name');
            $table->string('code');
            $table->timestamps();
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('health_facility');
    }
}
