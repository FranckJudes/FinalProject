<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('utilisateur_id');
            $table->unsignedBigInteger('role_id');
        
             
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');  
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->unique(['utilisateur_id', 'role_id']);
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs_roles');
    }
};