<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSparepartsTable extends Migration
{

    public function up()
    {
        Schema::create('spareparts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_sparepart');
            $table->string('name');
            $table->double('price', 8, 0);

            $table->unsignedInteger('motor_id')->unique();
            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('spareparts');
    }
}
