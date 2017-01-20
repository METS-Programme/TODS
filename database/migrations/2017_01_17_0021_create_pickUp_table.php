<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pick_up', function (Blueprint $table){
            $table->increments('pickup_id');
            $table->string('number');
            $table->string('date_picked');
            $table->string('picked_by');
            $table->string('given_by');
            $table->string('comment');
            $table->unsignedInteger('toolspicked_id');
            $table->foreign('toolspicked_id')->references('toolspicked_id')->on('tools_picked');
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
        Schema::drop('pick_up');
    }
}
