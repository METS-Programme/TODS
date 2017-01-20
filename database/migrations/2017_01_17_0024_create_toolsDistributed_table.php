<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsDistributedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools_distributed', function (Blueprint $table){
           $table->increments('toolsdistributed_id');
           $table->integer('quantity');
           $table->unsignedInteger('toolspicked_id');
           $table->unsignedInteger('distribution_id');
           $table->foreign('toolspicked_id')->references('toolspicked_id')->on('tools_picked');
           $table->foreign('distribution_id')->references('distribution_id')->on('distribution');
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
        Schema::drop('tools_distributed');
    }
}
