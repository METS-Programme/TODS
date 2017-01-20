<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsPickedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools_picked', function(Blueprint $table){
           $table->increments('toolspicked_id');
           $table->integer('quantity_ordered');
           $table->integer('quantity_authorized');
           $table->integer('quantity_collected');
           $table->string('comments');
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
        Schema::drop('tools_picked');
    }
}
