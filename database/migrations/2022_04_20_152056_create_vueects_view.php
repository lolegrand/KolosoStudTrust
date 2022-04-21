<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueectsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueects` AS select `studtrust`.`etudiant`.`num` AS `num`,`studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom`,sum(if((`studtrust`.`ue`.`modalite` = 'Maj'),21,if((`studtrust`.`ue`.`modalite` = 'Min'),9,if((`studtrust`.`ue`.`modalite` = 'UP'),30,0)))) AS `nbECTS` from (`studtrust`.`etudiant` join (`studtrust`.`etudiantselectue` join `studtrust`.`ue` on((`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`ue`.`codeUE`))) on((`studtrust`.`etudiant`.`num` = `studtrust`.`etudiantselectue`.`num`))) where (`studtrust`.`etudiantselectue`.`etat` = 'Valide') group by `studtrust`.`etudiant`.`num`,`studtrust`.`etudiant`.`nom`,`studtrust`.`etudiant`.`prenom`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueects`");
    }
}
