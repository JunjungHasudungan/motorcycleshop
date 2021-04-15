<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasaservicesTable extends Migration
{

    public function up()
    {
        Schema::create('jasaservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_jasaservice');
            $table->string('name');
            $table->double('price', 8, 0);

            $table->unsignedInteger('motor_id')->nullable();
            $table->foreign('motor_id')->references('id')->on('motors');
            $table->unique(['motor_id', 'user_id']);

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('jasaservices');
    }
}
