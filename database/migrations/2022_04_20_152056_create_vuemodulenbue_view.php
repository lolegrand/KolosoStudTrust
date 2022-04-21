<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVuemodulenbueView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vuemodulenbue` AS select count(0) AS `count(*)`,`studtrust`.`uecontent`.`codeModule` AS `codeModule` from `studtrust`.`uecontent` group by `studtrust`.`uecontent`.`codeModule`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vuemodulenbue`");
    }
}
