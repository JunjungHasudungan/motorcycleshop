<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CapasitiesTable extends Migration
{
    public function up()
    {
        Schema::create('capasities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('capasity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('capasities');
    }
}
