<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UE', function (Blueprint $table) {
            $table->string('codeUE', 50)->primary();
            $table->enum('modalite', ['Maj', 'Min', 'UP', 'Cesure'])->nullable();
            $table->string('libelle', 50);
            $table->boolean('impaire');
            $table->boolean('pair');
            $table->integer('capacite')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UE');
    }
}
