<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueinscritsuniteView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueinscritsunite` AS select `studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`etudiantselectue`.`codeUE` AS `codeUE`,count(0) AS `count(*)` from `studtrust`.`etudiantselectue` group by `studtrust`.`etudiantselectue`.`annee`,`studtrust`.`etudiantselectue`.`codeUE`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueinscritsunite`");
    }
}
