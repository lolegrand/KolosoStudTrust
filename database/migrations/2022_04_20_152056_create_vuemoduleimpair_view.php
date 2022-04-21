<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVuemoduleimpairView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vuemoduleimpair` AS select `studtrust`.`uecontent`.`codeModule` AS `codeModule` from (`studtrust`.`uecontent` join (select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where (`studtrust`.`ue`.`impaire` = TRUE)) `impaire` on((`studtrust`.`uecontent`.`codeUE` = `impaire`.`codeUE`))) group by `studtrust`.`uecontent`.`codeModule`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vuemoduleimpair`");
    }
}
