<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table){
           $table->increments('delivery_id');
           $table->string('printing_agency');
           $table->string('date_delivered');
           $table->string('delivered_by');
           $table->string('received_by');
           $table->unsignedInteger('printingorder_id');
           $table->foreign('printingorder_id')->references('printingorder_id')->on('printing_order');
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
        Schema::drop('delivery');
    }
}
