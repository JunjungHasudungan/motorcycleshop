<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MotorServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor_service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer');
            $table->unsignedInteger('service_id')->index();
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedInteger('motor_id')->nullable()->index();
            $table->foreign('motor_id')->references('id')->on('motors');
            $table->unsignedInteger('sparepart_id')->nullable()->index();
            $table->foreign('sparepart_id')->references('id')->on('spareparts');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motor_service');
    }
}
