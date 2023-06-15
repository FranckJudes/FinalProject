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
        Schema::create('utilisateurs_permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('utilisateur_id');
            $table->unsignedBigInteger('permission_id');
        
             
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');  
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->unique(['utilisateur_id', 'permission_id']);
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs_permissions');
    }
};