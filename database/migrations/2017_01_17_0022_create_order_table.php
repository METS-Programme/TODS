<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function(Blueprint $table){
           $table->increments('order_id');
           $table->integer('number');
           $table->string('date');
           $table->string('ordered_by');
           $table->string('comments');
           $table->unsignedInteger('ip_id');
           $table->unsignedInteger('pickup_id');
           $table->foreign('ip_id')->references('ip_id')->on('implementing_partner');
           $table->foreign('pickup_id')->references('pickup_id')->on('pick_up');
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
        Schema::drop('order');
    }
}
