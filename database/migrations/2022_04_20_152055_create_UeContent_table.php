<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUeContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UeContent', function (Blueprint $table) {
            $table->string('codeUE', 50);
            $table->string('codeModule', 50)->index('fk_uecontent_on_module');

            $table->primary(['codeUE', 'codeModule']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UeContent');
    }
}
