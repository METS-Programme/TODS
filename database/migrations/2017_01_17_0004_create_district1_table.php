<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrict1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('district', function (Blueprint $table){
         $table->increments('district_id');
         $table->string('name');
         $table->string('code');
         $table->string('latitude');
         $table->string('longitude');
         $table->unsignedInteger('region_id');
         $table->foreign('region_id')->references('region_id')->on('region');
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
        Schema::drop('district');
    }
}
