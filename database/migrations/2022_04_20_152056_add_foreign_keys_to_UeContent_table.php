<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUeContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }
}
