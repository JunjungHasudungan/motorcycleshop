<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->year('created_at_year');
            $table->string('no_plat')->nullable();
            $table->string('slug')->nullable();
            
            $table->unsignedInteger('capasity_id')->index();
            $table->foreign('capasity_id')->references('id')->on('capasities');
            $table->unsignedInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('motors');
    }
}
