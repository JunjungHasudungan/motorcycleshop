<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerMotorServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_motor_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_register');
            $table->string('name');
            $table->string('no_plat');
            $table->unsignedInteger('loan_id')->index();
            $table->foreign('loan_id')->references('id')->on('loans');
            $table->unsignedInteger('motor_id')->index();
            $table->foreign('motor_id')->references('id')->on('motors');
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
        Schema::dropIfExists('customer_motor_services');
    }
}
