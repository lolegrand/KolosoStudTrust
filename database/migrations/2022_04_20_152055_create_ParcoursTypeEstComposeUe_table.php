<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursTypeEstComposeUeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ParcoursTypeEstComposeUe', function (Blueprint $table) {
            $table->string('libelle', 50);
            $table->string('codeUE', 50)->index('fk_pk_parcourstypeestcomposeue_on_ue');
            $table->integer('numSemestre');

            $table->primary(['libelle', 'codeUE', 'numSemestre']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ParcoursTypeEstComposeUe');
    }
}
