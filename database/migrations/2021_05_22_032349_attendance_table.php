<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->datetime('start_work');
            $table->datetime('end_work');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

/* 
        Schema::create('register_customer_motor', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id_register');
            $table->string('name');
            $table->string('no_plat');
            $table->unsignedInteger('motor_id')->index();
            $table->foreign()->references('id')->on('motors');
            $table->timestamps();
        });
*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
