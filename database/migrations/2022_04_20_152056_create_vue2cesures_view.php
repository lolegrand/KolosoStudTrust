<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVue2cesuresView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vue2cesures` AS select `studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom`,`twocesure`.`anne1` AS `anne1`,`twocesure`.`anne2` AS `anne2` from (`studtrust`.`etudiant` join (select `studtrust`.`etudiantselectue`.`num` AS `num`,`studtrust`.`etudiantselectue`.`annee` AS `anne1`,`other`.`annee` AS `anne2` from `studtrust`.`etudiantselectue` join `studtrust`.`etudiantselectue` `other` where ((`studtrust`.`etudiantselectue`.`etat` = 'Cesure') and (`other`.`etat` = 'Cesure') and (`other`.`annee` <> `studtrust`.`etudiantselectue`.`annee`) and (`studtrust`.`etudiantselectue`.`num` = `other`.`num`) and (`other`.`annee` > `studtrust`.`etudiantselectue`.`annee`)) order by `studtrust`.`etudiantselectue`.`num`) `twocesure` on((`studtrust`.`etudiant`.`num` = `twocesure`.`num`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vue2cesures`");
    }
}
