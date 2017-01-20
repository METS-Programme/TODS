<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsDeliveredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools_delivered', function (Blueprint $table){
           $table->increments('toolsdelivered_id');
           $table->integer('quantity');
           $table->unsignedInteger('tools_id');
           $table->unsignedInteger('delivery_id');
           $table->foreign('tools_id')->references('tools_id')->on('tools');
           $table->foreign('delivery_id')->references('delivery_id')->on('delivery');
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
        Schema::drop('toold_delivered');
    }
}
