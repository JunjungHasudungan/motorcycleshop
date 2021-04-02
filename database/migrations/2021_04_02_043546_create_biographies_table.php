<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiographiesTable extends Migration
{

    public function up()
    {
        Schema::create('biographies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('gender');
            $table->string('domicile');
            $table->string('birthdayOfDate');
            $table->string('birthdayOfPlace');
            $table->timestamps();
        });
    }

    /**
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id'); 
                    
            $table->unique(['user_id','role_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
     */
    public function down()
    {
        Schema::dropIfExists('biographies');
    }
}
