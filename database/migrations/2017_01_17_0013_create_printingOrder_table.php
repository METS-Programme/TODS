<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintingOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printing_order', function (Blueprint $table){
           $table->increments('printingorder_id');
           $table->string('lpo_number');
           $table->string('date_ordered');
           $table->string('tools_duration');
           $table->string('comment');
           $table->unsignedInteger('tools_id');
           $table->foreign('tools_id')->references('tools_id')->on('tools');
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
        //
    }
}
