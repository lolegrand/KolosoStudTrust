<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueacquisxView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueacquisx` AS select `studtrust`.`etudiantselectue`.`codeUE` AS `codeUE`,`studtrust`.`etudiantselectue`.`etat` AS `etat` from (`studtrust`.`etudiantselectue` join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) where ((`studtrust`.`etudiantselectue`.`num` = 'stud2') and (`studtrust`.`etudiantselectue`.`etat` <> 'Echec'))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueacquisx`");
    }
}
