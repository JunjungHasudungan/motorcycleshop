<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldToCapasitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('motors', function (Blueprint $table) {

            $table->unsignedInteger('capasity_id')->unique();
            $table->foreign('capasity_id')->references('id')->on('capasities'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('motors', function (Blueprint $table) {
            //
        });
    }
}
