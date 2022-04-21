<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueinscritsueView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueinscritsue` AS select `studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`etudiant`.`nom` AS `nom` from ((`studtrust`.`etudiantselectue` join `studtrust`.`ue` on((`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`ue`.`codeUE`))) join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) order by `studtrust`.`etudiantselectue`.`annee`,`studtrust`.`etudiantselectue`.`codeUE`,`studtrust`.`etudiant`.`nom`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueinscritsue`");
    }
}
