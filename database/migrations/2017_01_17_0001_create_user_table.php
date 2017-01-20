<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table){
           $table->increments('user_id');
           $table->string('username');
           $table->string('firstname');
           $table->string('lastname');
           $table->string('othernames');
           $table->string('password');
           $table->string('organization');
           $table->string('emailaddress');
           $table->string('phoneone');
           $table->string('phonetwo');
           $table->string('phonethree');
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
        Schema::drop('user');
    }
}
