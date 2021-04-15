<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiographiesTable extends Migration
{

    public function up()
    {
        Schema::create('biographies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender');
            $table->string('domicile');
            $table->string('birthdayOfDate');
            $table->string('birthdayOfPlace');
            $table->integer('id_user')->nullable();
            
            $table->unsignedInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biographies');
    }
}
