<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStudtrustTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enseignant', function (Blueprint $table) {
            $table->string('num', 50)->primary();
            $table->string('nom', 50);
            $table->string('prenom', 50);
        });

        Schema::create('EnseignantEstResponsableUe', function (Blueprint $table) {
            $table->string('codeUE', 50);
            $table->string('num', 50)->index('fk_enseignantestresponsableue_on_enseignant');
            $table->integer('annee')->nullable();
            $table->string('semestre', 50)->nullable();

            $table->primary(['codeUE', 'num']);
        });

        Schema::create('Etudiant', function (Blueprint $table) {
            $table->string('num', 50)->primary();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->date('dateNaiss');
        });

        Schema::create('EtudiantSelectUE', function (Blueprint $table) {
            $table->string('codeUE', 50);
            $table->string('num', 50)->index('fk_etudiantselectue_on_etudiant');
            $table->integer('annee');
            $table->string('semestre', 50);
            $table->enum('etat', ['Valide', 'Echec', 'En cour', 'Cesure']);

            $table->primary(['codeUE', 'num', 'annee', 'semestre', 'etat']);
        });

        Schema::create('Module', function (Blueprint $table) {
            $table->string('codeModule', 50)->primary();
            $table->string('libelle', 50);
            $table->string('commentaire')->nullable();
        });

        Schema::create('ParcoursType', function (Blueprint $table) {
            $table->string('libelle', 50)->primary();
        });

        Schema::create('ParcoursTypeEstComposeUe', function (Blueprint $table) {
            $table->string('libelle', 50);
            $table->string('codeUE', 50)->index('fk_pk_parcourstypeestcomposeue_on_ue');
            $table->integer('numSemestre');

            $table->primary(['libelle', 'codeUE', 'numSemestre']);
        });

        Schema::create('UE', function (Blueprint $table) {
            $table->string('codeUE', 50)->primary();
            $table->enum('modalite', ['Maj', 'Min', 'UP', 'Cesure'])->nullable();
            $table->string('libelle', 50);
            $table->boolean('impaire');
            $table->boolean('pair');
            $table->integer('capacite')->nullable();
        });

        Schema::create('UeContent', function (Blueprint $table) {
            $table->string('codeUE', 50);
            $table->string('codeModule', 50)->index('fk_uecontent_on_module');

            $table->primary(['codeUE', 'codeModule']);
        });

        DB::statement("CREATE VIEW `vue2cesures` AS select `studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom`,`twocesure`.`anne1` AS `anne1`,`twocesure`.`anne2` AS `anne2` from (`studtrust`.`etudiant` join (select `studtrust`.`etudiantselectue`.`num` AS `num`,`studtrust`.`etudiantselectue`.`annee` AS `anne1`,`other`.`annee` AS `anne2` from `studtrust`.`etudiantselectue` join `studtrust`.`etudiantselectue` `other` where ((`studtrust`.`etudiantselectue`.`etat` = 'Cesure') and (`other`.`etat` = 'Cesure') and (`other`.`annee` <> `studtrust`.`etudiantselectue`.`annee`) and (`studtrust`.`etudiantselectue`.`num` = `other`.`num`) and (`other`.`annee` > `studtrust`.`etudiantselectue`.`annee`)) order by `studtrust`.`etudiantselectue`.`num`) `twocesure` on((`studtrust`.`etudiant`.`num` = `twocesure`.`num`)))");

        DB::statement("CREATE VIEW `vueacquisdetailx` AS select `studtrust`.`etudiantselectue`.`codeUE` AS `codeUE`,`studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`etudiantselectue`.`semestre` AS `semestre`,`studtrust`.`enseignant`.`nom` AS `nom`,if((`studtrust`.`etudiantselectue`.`etat` = 'Valide'),if((`studtrust`.`ue`.`modalite` = 'Maj'),21,9),0) AS `ECTS` from ((`studtrust`.`etudiantselectue` join `studtrust`.`ue` on((`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`ue`.`codeUE`))) join `studtrust`.`enseignantestresponsableue`) join `studtrust`.`enseignant` where ((`studtrust`.`etudiantselectue`.`num` = 'stud2') and (`studtrust`.`etudiantselectue`.`annee` = `studtrust`.`enseignantestresponsableue`.`annee`) and (`studtrust`.`etudiantselectue`.`semestre` = `studtrust`.`enseignantestresponsableue`.`semestre`) and (`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`enseignantestresponsableue`.`codeUE`) and (`studtrust`.`enseignant`.`num` = `studtrust`.`enseignantestresponsableue`.`num`))");

        DB::statement("CREATE VIEW `vueacquisx` AS select `studtrust`.`etudiantselectue`.`codeUE` AS `codeUE`,`studtrust`.`etudiantselectue`.`etat` AS `etat` from (`studtrust`.`etudiantselectue` join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) where ((`studtrust`.`etudiantselectue`.`num` = 'stud2') and (`studtrust`.`etudiantselectue`.`etat` <> 'Echec'))");

        DB::statement("CREATE VIEW `vueajourneesagg` AS select `studtrust`.`etudiantselectue`.`codeUE` AS `codeUE`,`studtrust`.`etudiantselectue`.`annee` AS `annee`,count(0) AS `inscrit`,count((case `studtrust`.`etudiantselectue`.`etat` when 'Echec' then 1 end)) AS `echec`,((count((case `studtrust`.`etudiantselectue`.`etat` when 'Echec' then 1 end)) / count(0)) * 100) AS `porcentEchec` from `studtrust`.`etudiantselectue` group by `studtrust`.`etudiantselectue`.`codeUE`,`studtrust`.`etudiantselectue`.`annee` order by `studtrust`.`etudiantselectue`.`annee`");

        DB::statement("CREATE VIEW `vueajourneesdetail` AS select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`impaire` AS `impaire`,`studtrust`.`ue`.`pair` AS `pair`,`studtrust`.`ue`.`capacite` AS `capacite`,`studtrust`.`etudiantselectue`.`num` AS `num`,`studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`etudiantselectue`.`semestre` AS `semestre`,`studtrust`.`etudiantselectue`.`etat` AS `etat`,`studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom`,`studtrust`.`etudiant`.`dateNaiss` AS `dateNaiss` from (`studtrust`.`ue` join (`studtrust`.`etudiantselectue` join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) on((`studtrust`.`ue`.`codeUE` = `studtrust`.`etudiantselectue`.`codeUE`))) where (`studtrust`.`etudiantselectue`.`etat` = 'Echec') order by `studtrust`.`etudiantselectue`.`annee`,`studtrust`.`etudiant`.`nom`");

        DB::statement("CREATE VIEW `vuecesure` AS select `studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`etudiantselectue`.`semestre` AS `semestre`,`studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom` from (`studtrust`.`etudiantselectue` join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) where (`studtrust`.`etudiantselectue`.`etat` = 'Cesure')");

        DB::statement("CREATE VIEW `vuediplomes` AS select `studtrust`.`etudiantselectue`.`num` AS `num` from (`studtrust`.`etudiantselectue` join `studtrust`.`ue` on((`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`ue`.`codeUE`))) where ((`studtrust`.`etudiantselectue`.`etat` <> 'Echec') and (`studtrust`.`etudiantselectue`.`etat` <> 'Cesure')) group by `studtrust`.`etudiantselectue`.`num` having ((count((case when (`studtrust`.`etudiantselectue`.`codeUE` = 'UP') then 1 end)) >= 1) and (count((case when (`studtrust`.`ue`.`modalite` = 'Maj') then 1 end)) >= 5) and (sum(if((`studtrust`.`ue`.`modalite` = 'Maj'),21,if((`studtrust`.`ue`.`modalite` = 'Min'),9,if((`studtrust`.`ue`.`modalite` = 'UP'),30,0)))) >= 180))");

        DB::statement("CREATE VIEW `vueects` AS select `studtrust`.`etudiant`.`num` AS `num`,`studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom`,sum(if((`studtrust`.`ue`.`modalite` = 'Maj'),21,if((`studtrust`.`ue`.`modalite` = 'Min'),9,if((`studtrust`.`ue`.`modalite` = 'UP'),30,0)))) AS `nbECTS` from (`studtrust`.`etudiant` join (`studtrust`.`etudiantselectue` join `studtrust`.`ue` on((`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`ue`.`codeUE`))) on((`studtrust`.`etudiant`.`num` = `studtrust`.`etudiantselectue`.`num`))) where (`studtrust`.`etudiantselectue`.`etat` = 'Valide') group by `studtrust`.`etudiant`.`num`,`studtrust`.`etudiant`.`nom`,`studtrust`.`etudiant`.`prenom`");

        DB::statement("CREATE VIEW `vueimpassesurx` AS select `studtrust`.`etudiant`.`num` AS `num`,`studtrust`.`etudiant`.`nom` AS `nom`,`studtrust`.`etudiant`.`prenom` AS `prenom`,`studtrust`.`etudiant`.`dateNaiss` AS `dateNaiss` from `studtrust`.`etudiant` where (not(`studtrust`.`etudiant`.`num` in (select distinct `studtrust`.`etudiantselectue`.`num` from (`studtrust`.`etudiantselectue` join `studtrust`.`module`) where (`studtrust`.`module`.`libelle` like '%Windows%'))))");

        DB::statement("CREATE VIEW `vueinscritsmodule` AS select `studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`module`.`libelle` AS `libelle`,`studtrust`.`etudiant`.`nom` AS `nom` from ((`studtrust`.`etudiantselectue` join `studtrust`.`module`) join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) order by `studtrust`.`etudiantselectue`.`annee`,`studtrust`.`module`.`libelle`,`studtrust`.`etudiant`.`nom`");

        DB::statement("CREATE VIEW `vueinscritsue` AS select `studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`etudiant`.`nom` AS `nom` from ((`studtrust`.`etudiantselectue` join `studtrust`.`ue` on((`studtrust`.`etudiantselectue`.`codeUE` = `studtrust`.`ue`.`codeUE`))) join `studtrust`.`etudiant` on((`studtrust`.`etudiantselectue`.`num` = `studtrust`.`etudiant`.`num`))) order by `studtrust`.`etudiantselectue`.`annee`,`studtrust`.`etudiantselectue`.`codeUE`,`studtrust`.`etudiant`.`nom`");

        DB::statement("CREATE VIEW `vueinscritsunite` AS select `studtrust`.`etudiantselectue`.`annee` AS `annee`,`studtrust`.`etudiantselectue`.`codeUE` AS `codeUE`,count(0) AS `count(*)` from `studtrust`.`etudiantselectue` group by `studtrust`.`etudiantselectue`.`annee`,`studtrust`.`etudiantselectue`.`codeUE`");

        DB::statement("CREATE VIEW `vuemoduleimpair` AS select `studtrust`.`uecontent`.`codeModule` AS `codeModule` from (`studtrust`.`uecontent` join (select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where (`studtrust`.`ue`.`impaire` = TRUE)) `impaire` on((`studtrust`.`uecontent`.`codeUE` = `impaire`.`codeUE`))) group by `studtrust`.`uecontent`.`codeModule`");

        DB::statement("CREATE VIEW `vuemodulenbue` AS select count(0) AS `count(*)`,`studtrust`.`uecontent`.`codeModule` AS `codeModule` from `studtrust`.`uecontent` group by `studtrust`.`uecontent`.`codeModule`");

        DB::statement("CREATE VIEW `vuemodulepair` AS select `studtrust`.`uecontent`.`codeModule` AS `codeModule` from (`studtrust`.`uecontent` join (select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where (`studtrust`.`ue`.`pair` = TRUE)) `pair` on((`studtrust`.`uecontent`.`codeUE` = `pair`.`codeUE`))) group by `studtrust`.`uecontent`.`codeModule`");

        DB::statement("CREATE VIEW `vueueimpair` AS select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where (`studtrust`.`ue`.`impaire` = TRUE)");

        DB::statement("CREATE VIEW `vueueimpairpair` AS select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where ((`studtrust`.`ue`.`pair` = TRUE) and (`studtrust`.`ue`.`impaire` = TRUE))");

        DB::statement("CREATE VIEW `vueuepair` AS select `studtrust`.`ue`.`codeUE` AS `codeUE`,`studtrust`.`ue`.`modalite` AS `modalite`,`studtrust`.`ue`.`libelle` AS `libelle`,`studtrust`.`ue`.`capacite` AS `capacite` from `studtrust`.`ue` where (`studtrust`.`ue`.`pair` = TRUE)");

        Schema::table('EnseignantEstResponsableUe', function (Blueprint $table) {
            $table->foreign(['num'], 'fk_enseignantestresponsableue_on_enseignant')->references(['num'])->on('Enseignant');
            $table->foreign(['codeUE'], 'fk_enseignantestresponsableue_on_ue')->references(['codeUE'])->on('UE');
        });

        Schema::table('EtudiantSelectUE', function (Blueprint $table) {
            $table->foreign(['num'], 'fk_etudiantselectue_on_etudiant')->references(['num'])->on('Etudiant');
            $table->foreign(['codeUE'], 'fk_etudiantselectue_on_ue')->references(['codeUE'])->on('UE');
        });

        Schema::table('ParcoursTypeEstComposeUe', function (Blueprint $table) {
            $table->foreign(['libelle'], 'fk_pk_parcourstypeestcomposeue_on_parcourstype')->references(['libelle'])->on('ParcoursType');
            $table->foreign(['codeUE'], 'fk_pk_parcourstypeestcomposeue_on_ue')->references(['codeUE'])->on('UE');
        });

        Schema::table('UeContent', function (Blueprint $table) {
            $table->foreign(['codeModule'], 'fk_uecontent_on_module')->references(['codeModule'])->on('Module');
            $table->foreign(['codeUE'], 'fk_uecontent_on_ue')->references(['codeUE'])->on('UE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('UeContent', function (Blueprint $table) {
            $table->dropForeign('fk_uecontent_on_module');
            $table->dropForeign('fk_uecontent_on_ue');
        });

        Schema::table('ParcoursTypeEstComposeUe', function (Blueprint $table) {
            $table->dropForeign('fk_pk_parcourstypeestcomposeue_on_parcourstype');
            $table->dropForeign('fk_pk_parcourstypeestcomposeue_on_ue');
        });

        Schema::table('EtudiantSelectUE', function (Blueprint $table) {
            $table->dropForeign('fk_etudiantselectue_on_etudiant');
            $table->dropForeign('fk_etudiantselectue_on_ue');
        });

        Schema::table('EnseignantEstResponsableUe', function (Blueprint $table) {
            $table->dropForeign('fk_enseignantestresponsableue_on_enseignant');
            $table->dropForeign('fk_enseignantestresponsableue_on_ue');
        });

        DB::statement("DROP VIEW IF EXISTS `vueuepair`");

        DB::statement("DROP VIEW IF EXISTS `vueueimpairpair`");

        DB::statement("DROP VIEW IF EXISTS `vueueimpair`");

        DB::statement("DROP VIEW IF EXISTS `vuemodulepair`");

        DB::statement("DROP VIEW IF EXISTS `vuemodulenbue`");

        DB::statement("DROP VIEW IF EXISTS `vuemoduleimpair`");

        DB::statement("DROP VIEW IF EXISTS `vueinscritsunite`");

        DB::statement("DROP VIEW IF EXISTS `vueinscritsue`");

        DB::statement("DROP VIEW IF EXISTS `vueinscritsmodule`");

        DB::statement("DROP VIEW IF EXISTS `vueimpassesurx`");

        DB::statement("DROP VIEW IF EXISTS `vueects`");

        DB::statement("DROP VIEW IF EXISTS `vuediplomes`");

        DB::statement("DROP VIEW IF EXISTS `vuecesure`");

        DB::statement("DROP VIEW IF EXISTS `vueajourneesdetail`");

        DB::statement("DROP VIEW IF EXISTS `vueajourneesagg`");

        DB::statement("DROP VIEW IF EXISTS `vueacquisx`");

        DB::statement("DROP VIEW IF EXISTS `vueacquisdetailx`");

        DB::statement("DROP VIEW IF EXISTS `vue2cesures`");

        Schema::dropIfExists('UeContent');

        Schema::dropIfExists('UE');

        Schema::dropIfExists('ParcoursTypeEstComposeUe');

        Schema::dropIfExists('ParcoursType');

        Schema::dropIfExists('Module');

        Schema::dropIfExists('EtudiantSelectUE');

        Schema::dropIfExists('Etudiant');

        Schema::dropIfExists('EnseignantEstResponsableUe');

        Schema::dropIfExists('Enseignant');
    }
}
