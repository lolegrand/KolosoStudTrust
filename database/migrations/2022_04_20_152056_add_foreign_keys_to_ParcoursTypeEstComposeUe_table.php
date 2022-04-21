<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToParcoursTypeEstComposeUeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ParcoursTypeEstComposeUe', function (Blueprint $table) {
            $table->foreign(['libelle'], 'fk_pk_parcourstypeestcomposeue_on_parcourstype')->references(['libelle'])->on('ParcoursType');
            $table->foreign(['codeUE'], 'fk_pk_parcourstypeestcomposeue_on_ue')->references(['codeUE'])->on('UE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ParcoursTypeEstComposeUe', function (Blueprint $table) {
            $table->dropForeign('fk_pk_parcourstypeestcomposeue_on_parcourstype');
            $table->dropForeign('fk_pk_parcourstypeestcomposeue_on_ue');
        });
    }
}
