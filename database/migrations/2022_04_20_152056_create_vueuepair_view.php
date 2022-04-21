<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueuepairView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueuepair` AS select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where (`studtrust`.`ue`.`pair` = TRUE)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueuepair`");
    }
}
