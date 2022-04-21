<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVueimpassesurxView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vueimpassesurx` AS select `studtrust`.`etudiant`.`num` AS `num`,`studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom`,`studtrust`.`etudiant`.`dateNaiss` AS `dateNaiss` from `studtrust`.`etudiant` where (not(`studtrust`.`etudiant`.`num` in (select distinct `studtrust`.`etudiantselectue`.`num` from (`studtrust`.`etudiantselectue` join `studtrust`.`module`) where (`studtrust`.`module`.`libelle` like '%Windows%'))))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vueimpassesurx`");
    }
}
