<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVuediplomesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vuediplomes` AS select `studtrust`.`etudiantselectue`.`num` AS `num` from (`studtrust`.`etudiantselectue` join `studtrust`.`ue` on((`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`ue`.`codeUE`))) where ((`studtrust`.`etudiantselectue`.`etat` <> 'Echec') and (`studtrust`.`etudiantselectue`.`etat` <> 'Cesure')) group by `studtrust`.`etudiantselectue`.`num` having ((count((case when (`studtrust`.`etudiantselectue`.`codeUE` = 'UP') then 1 end)) >= 1) and (count((case when (`studtrust`.`ue`.`modalite` = 'Maj') then 1 end)) >= 5) and (sum(if((`studtrust`.`ue`.`modalite` = 'Maj'),21,if((`studtrust`.`ue`.`modalite` = 'Min'),9,if((`studtrust`.`ue`.`modalite` = 'UP'),30,0)))) >= 180))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vuediplomes`");
    }
}
