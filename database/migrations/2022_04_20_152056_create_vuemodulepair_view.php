<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVuemodulepairView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vuemodulepair` AS select `studtrust`.`uecontent`.`codeModule` AS `codeModule` from (`studtrust`.`uecontent` join (select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where (`studtrust`.`ue`.`pair` = TRUE)) `pair` on((`studtrust`.`uecontent`.`codeUE` = `pair`.`codeUE`))) group by `studtrust`.`uecontent`.`codeModule`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vuemodulepair`");
    }
}
