<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcountyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcounty', function(Blueprint $table){
            $table->increments('subcounty_id');
            $table->string('name');
            $table->string('code');
            $table->string('longitude');
            $table->string('latitude');
            $table->unsignedInteger('district_id');
            $table->foreign('district_id')->references('district_id')->on('district');
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
        Schema::drop('subcounty');
    }
}
