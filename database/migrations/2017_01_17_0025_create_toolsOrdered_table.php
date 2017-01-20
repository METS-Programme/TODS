<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsOrderedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools_ordered', function (Blueprint $table){
           $table->increments('toolsordered_id');
           $table->integer('quantity');
           $table->string('urgency');
           $table->unsignedInteger('tools_id');
           $table->unsignedInteger('order_id');
           $table->foreign('tools_id')->references('tools_id')->on('tools');
           $table->foreign('order_id')->references('order_id')->on('order');
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
        Schema::drop('tools_ordered');
    }
}
