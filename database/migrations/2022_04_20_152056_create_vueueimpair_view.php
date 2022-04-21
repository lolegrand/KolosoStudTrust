<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueueimpairView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueueimpair` AS select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where (`studtrust`.`ue`.`impaire` = TRUE)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueueimpair`");
    }
}
