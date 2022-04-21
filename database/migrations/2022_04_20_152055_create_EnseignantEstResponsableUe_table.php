<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantEstResponsableUeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EnseignantEstResponsableUe', function (Blueprint $table) {
            $table->string('codeUE', 50);
            $table->string('num', 50)->index('fk_enseignantestresponsableue_on_enseignant');
            $table->integer('annee')->nullable();
            $table->string('semestre', 50)->nullable();

            $table->primary(['codeUE', 'num']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EnseignantEstResponsableUe');
    }
}
