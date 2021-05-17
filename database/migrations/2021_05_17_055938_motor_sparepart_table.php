<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MotorSparepartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor_sparepart', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('motor_id')->index();
            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('cascade');
            $table->unsignedInteger('sparepart_id')->index();
            $table->foreign('sparepart_id')->references('id')->on('spareparts')->onDelete('cascade');
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
        Schema::dropIfExists('motor_sparepart');
    }
}
