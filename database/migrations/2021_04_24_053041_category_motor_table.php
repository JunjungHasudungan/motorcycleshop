<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryMotorTable extends Migration
{
    public function up()
    {
        Schema::create('category_motor', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedInteger('motor_id')->index();
            $table->foreign('motor_id')->references('id')->on('motors');

        });
    }

    public function down()
    {
        Schema::dropIfExists('category_motor');
    }
}
