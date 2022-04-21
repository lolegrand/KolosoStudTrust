<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEnseignantEstResponsableUeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('EnseignantEstResponsableUe', function (Blueprint $table) {
            $table->foreign(['num'], 'fk_enseignantestresponsableue_on_enseignant')->references(['num'])->on('Enseignant');
            $table->foreign(['codeUE'], 'fk_enseignantestresponsableue_on_ue')->references(['codeUE'])->on('UE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('EnseignantEstResponsableUe', function (Blueprint $table) {
            $table->dropForeign('fk_enseignantestresponsableue_on_enseignant');
            $table->dropForeign('fk_enseignantestresponsableue_on_ue');
        });
    }
}
