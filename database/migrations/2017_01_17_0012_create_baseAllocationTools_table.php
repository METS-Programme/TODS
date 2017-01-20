<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseAllocationToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_allocation_tools', function (Blueprint $table){
           $table->increments('baseallocationtools_id');
           $table->string('tools');
           $table->string('level');
           $table->unsignedInteger('tools_id');
           $table->foreign('tools_id')->references('tools_id')->on ('tools');
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
        Schema::drop('base_allocation_tools');
    }
}
