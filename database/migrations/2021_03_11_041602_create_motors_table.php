<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorsTable extends Migration
{

    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('year');
            $table->string('no_plat')->nullable();

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('motors');
    }
}
