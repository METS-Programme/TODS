<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImplementingPartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementing_partner', function (Blueprint $table){
           $table->increments('ip_id');
           $table->string('name');
           $table->string('comprehensive_partner');
           $table->unsignedInteger('fundingagency_id');
           $table->foreign('fundingagency_id')->references('fundingagency_id')->on('funding_agency');
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
        Schema::drop('implementing_partner');
    }
}
