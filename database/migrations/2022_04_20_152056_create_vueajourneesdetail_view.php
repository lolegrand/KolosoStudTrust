<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueajourneesdetailView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueajourneesdetail` AS select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`impaire` AS `impaire`,`studtrust`.`ue`.`pair` AS `pair`,`studtrust`.`ue`.`capacite` AS `capacite`,`studtrust`.`etudiantselectue`.`num` AS `num`,`studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`etudiantselectue`.`semestre` AS `semestre`,`studtrust`.`etudiantselectue`.`etat` AS `etat`,`studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom`,`studtrust`.`etudiant`.`dateNaiss` AS `dateNaiss` from (`studtrust`.`ue` join (`studtrust`.`etudiantselectue` join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) on((`studtrust`.`ue`.`codeUE` = `studtrust`.`etudiantselectue`.`codeUE`))) where (`studtrust`.`etudiantselectue`.`etat` = 'Echec') order by `studtrust`.`etudiantselectue`.`annee`,`studtrust`.`etudiant`.`nom`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueajourneesdetail`");
    }
}
