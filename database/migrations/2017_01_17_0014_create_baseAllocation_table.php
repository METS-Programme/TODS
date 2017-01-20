<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseAllocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_allocation', function(Blueprint $table){
            $table->increments('baseallocation_id');
            $table->string('date_allocated');
            $table->string('allocated_by');
            $table->unsignedInteger('facilitylevel_id');
            $table->unsignedInteger('baseallocationtools_id');
            $table->unsignedInteger('printorder_id');
            $table->foreign('facilitylevel_id')->references('facilitylevel_id')->on('facility_level');
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
        Schema::drop('base_allocation');
    }
}
