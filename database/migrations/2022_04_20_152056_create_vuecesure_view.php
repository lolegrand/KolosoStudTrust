<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVuecesureView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vuecesure` AS select `studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`etudiantselectue`.`semestre` AS `semestre`,`studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom` from (`studtrust`.`etudiantselectue` join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) where (`studtrust`.`etudiantselectue`.`etat` = 'Cesure')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vuecesure`");
    }
}
