<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocation', function (Blueprint $table){
           $table->increments('allocation_id');
           $table->integer('quantity');
           $table->string('date_generated');
           $table->unsignedInteger('baseallocation_id');
           $table->foreign('baseallocation_id')->references('baseallocation_id')->on('base_allocation');
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
        Schema::drop('allocation');
    }
}
