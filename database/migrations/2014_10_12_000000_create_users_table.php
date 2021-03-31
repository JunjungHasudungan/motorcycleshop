<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /* 
                $table->string('nim');
            $table->string('name');
            $table->string('role');
            $table->string('brithOfDay');
            $table->string('brithOfPlace');
            $table->string('gender');
            $table->double('totalPoint', 10, 0);

                        $table->integer('student_id');
            $table->integer('subject_id');
            $table->date('registrasionDate');
            $table->string('period');
    */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
