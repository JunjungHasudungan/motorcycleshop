<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToCapasitiesTable extends Migration
{
    public function up()
    {
        Schema::table('motors', function (Blueprint $table) {


            // $table->unsignedInteger('user_id')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');

            // $table->unsignedInteger('capasity_id');
            // $table->foreign('capasity_id')->references('id')->on('capasities');



        });
    }

    public function down()
    {
        Schema::table('motors', function (Blueprint $table) {
            //
        });
    }
}
