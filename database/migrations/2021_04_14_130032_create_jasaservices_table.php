<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasaservicesTable extends Migration
{

    public function up()
    {
        Schema::create('jasaservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_jasaservice');
            $table->string('name');
            $table->double('price', 8, 0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('jasaservices');
    }
}
