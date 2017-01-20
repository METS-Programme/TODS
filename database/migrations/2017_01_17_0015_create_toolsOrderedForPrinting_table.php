<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsOrderedForPrintingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools_ordered_for_printing',function (Blueprint $table){
            $table->increments('toolsforprinting_id');
            $table->string('tool');
            $table->string('quantity');
            $table->unsignedInteger('printingorder_id');
            $table->foreign('printingorder_id')->references('printingorder_id')->on('printing_order');
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tools_ordered_for_printing');
    }
}
