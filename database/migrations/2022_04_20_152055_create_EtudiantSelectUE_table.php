<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantSelectUETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EtudiantSelectUE', function (Blueprint $table) {
            $table->string('codeUE', 50);
            $table->string('num', 50)->index('fk_etudiantselectue_on_etudiant');
            $table->integer('annee');
            $table->string('semestre', 50);
            $table->enum('etat', ['Valide', 'Echec', 'En cour', 'Cesure']);

            $table->primary(['codeUE', 'num', 'annee', 'semestre', 'etat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EtudiantSelectUE');
    }
}
