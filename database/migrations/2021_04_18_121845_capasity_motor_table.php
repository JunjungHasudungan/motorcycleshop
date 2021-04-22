<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CapasityMotorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capasity_motor', function (Blueprint $table) {
            $table->unsignedInteger('capasity_id');
            $table->foreign('capasity_id')->references('id')->on('capasities');
            $table->unsignedInteger('motor_id');
            $table->foreign('motor_id')->references('id')->on('motors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capasity_motor');
    }
}
