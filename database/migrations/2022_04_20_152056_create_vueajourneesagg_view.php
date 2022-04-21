<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueajourneesaggView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueajourneesagg` AS select `studtrust`.`etudiantselectue`.`codeUE` AS `codeUE`,`studtrust`.`etudiantselectue`.`annee` AS `annee`,count(0) AS `inscrit`,count((case `studtrust`.`etudiantselectue`.`etat` when 'Echec' then 1 end)) AS `echec`,((count((case `studtrust`.`etudiantselectue`.`etat` when 'Echec' then 1 end)) / count(0)) * 100) AS `porcentEchec` from `studtrust`.`etudiantselectue` group by `studtrust`.`etudiantselectue`.`codeUE`,`studtrust`.`etudiantselectue`.`annee` order by `studtrust`.`etudiantselectue`.`annee`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueajourneesagg`");
    }
}
