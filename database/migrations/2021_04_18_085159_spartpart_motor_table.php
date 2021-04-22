<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpartpartMotorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spartpart_motor', function (Blueprint $table) {
            $table->unsignedInteger('motor_id');
            $table->foreign('motor_id')->references('id')->on('motors');
            $table->unsignedInteger('sparepart_id');
            $table->foreign('sparepart_id')->references('id')->on('spareparts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spartpart_motor');
    }
}
