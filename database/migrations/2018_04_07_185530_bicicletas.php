<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bicicletas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bicicletas', function (Blueprint $table) {
            $table->increments('id_bici');
            $table->integer('rodada');
            $table->string('marca');
            $table->string('color');
            $table->integer('matricula_a')->nullable();
            $table->integer('matricula_t')->nullable();
            $table->integer('matricula_v')->nullable();
            $table->foreign('matricula_a')->references('matricula')->on('alumnos')->onDelete('cascade');
            $table->foreign('matricula_t')->references('matricula')->on('trabajadores')->onDelete('cascade');
            $table->foreign('matricula_v')->references('no_id')->on('visitantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bicicletas');
    }
}
