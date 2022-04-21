<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEtudiantSelectUETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('EtudiantSelectUE', function (Blueprint $table) {
            $table->foreign(['num'], 'fk_etudiantselectue_on_etudiant')->references(['num'])->on('Etudiant');
            $table->foreign(['codeUE'], 'fk_etudiantselectue_on_ue')->references(['codeUE'])->on('UE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('EtudiantSelectUE', function (Blueprint $table) {
            $table->dropForeign('fk_etudiantselectue_on_etudiant');
            $table->dropForeign('fk_etudiantselectue_on_ue');
        });
    }
}
