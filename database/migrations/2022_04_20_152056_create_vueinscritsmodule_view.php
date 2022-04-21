<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueinscritsmoduleView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueinscritsmodule` AS select `studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`module`.`libelle` AS `libelle`,`studtrust`.`etudiant`.`nom` AS `nom` from ((`studtrust`.`etudiantselectue` join `studtrust`.`module`) join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) order by `studtrust`.`etudiantselectue`.`annee`,`studtrust`.`module`.`libelle`,`studtrust`.`etudiant`.`nom`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueinscritsmodule`");
    }
}
