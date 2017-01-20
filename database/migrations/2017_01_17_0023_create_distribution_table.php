<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribution', function (Blueprint $table){
           $table->increments('distribution_id');
           $table->string('date_received');
           $table->string('distributed_by');
           $table->string('received_by');
           $table->string('comments');
           $table->unsignedInteger('ip_id');
           $table->foreign('ip_id')->references('ip_id')->on('implementing_partner');
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
        Schema::drop('distribution');
    }
}
