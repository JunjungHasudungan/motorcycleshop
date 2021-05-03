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
            $table->string('birthday_of_date');
            $table->string('birthday_of_place');
            $table->double('id_user', 8, 0)->nullable();
            
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biographies');
    }
}
