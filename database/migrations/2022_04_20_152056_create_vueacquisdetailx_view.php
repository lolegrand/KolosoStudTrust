<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueacquisdetailxView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueacquisdetailx` AS select `studtrust`.`etudiantselectue`.`codeUE` AS `codeUE`,`studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`etudiantselectue`.`semestre` AS `semestre`,`studtrust`.`enseignant`.`nom` AS `nom`,if((`studtrust`.`etudiantselectue`.`etat` = 'Valide'),if((`studtrust`.`ue`.`modalite` = 'Maj'),21,9),0) AS `ECTS` from ((`studtrust`.`etudiantselectue` join `studtrust`.`ue` on((`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`ue`.`codeUE`))) join `studtrust`.`enseignantestresponsableue`) join `studtrust`.`enseignant` where ((`studtrust`.`etudiantselectue`.`num` = 'stud2') and (`studtrust`.`etudiantselectue`.`annee` = `studtrust`.`enseignantestresponsableue`.`annee`) and (`studtrust`.`etudiantselectue`.`semestre` = `studtrust`.`enseignantestresponsableue`.`semestre`) and (`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`enseignantestresponsableue`.`codeUE`) and (`studtrust`.`enseignant`.`num` = `studtrust`.`enseignantestresponsableue`.`num`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueacquisdetailx`");
    }
}
