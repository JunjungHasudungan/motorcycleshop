<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldMotor extends Migration
{
    public function up()
    {
        Schema::table('jasaservices', function (Blueprint $table) {
            $table->unsignedInteger('motor_id')->nullable();
            $table->foreign('motor_id')->references('id')->on('motors');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jasaservices', function (Blueprint $table) {
            //
        });
    }
}
