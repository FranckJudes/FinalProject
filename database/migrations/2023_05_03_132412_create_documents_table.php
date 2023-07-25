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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('utilisateur_id');
            $table->string('titre');
            $table->string('description');
            $table->string('datePublication')->nullable();
            $table->string('dateLimite')->nullable();
            $table->enum('niveauAcademique',['INFOL1','INFOL2','INFOL3','ICTL1','ICTL2','ICTL3','M1','M2','ALL'])->default('ALL');
            $table->enum('categorie',['Emploi de Temps','Notes','Communique','Liste de Selection','Liste Admin','Annonces','Avis de Recherche']);

            
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');  
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
        Schema::dropIfExists('documents');
    }
};