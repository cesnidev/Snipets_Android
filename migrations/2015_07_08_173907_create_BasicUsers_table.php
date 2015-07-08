<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BasicUsers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('legalname');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confpassword');
            $table->string('referred');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->integer('phone');
            $table->string('relation');


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
        Schema::drop('BasicUsers');
    }
}
