<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissionRoleTable extends Migration
{
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('role_id'); 
                    
            $table->unique(['permission_id','role_id']);
            $table->foreign('permission_id')->references('id')->on('permisions')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}
