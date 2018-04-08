<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('placas');
            $table->primary('placas');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->integer('matricula_a')->nullable();
            $table->integer('matricula_t')->nullable();
            $table->integer('matricula_v')->nullable();
            $table->foreign('matricula_v')->references('no_id')->on('visitantes')->onDelete('cascade');
            $table->foreign('matricula_a')->references('matricula')->on('alumnos')->onDelete('cascade');
            $table->foreign('matricula_t')->references('matricula')->on('trabajadores')->onDelete('cascade');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
        Schema::table('vehiculos', function($table) {
            $table->dropColumn('placas');
        });
    }
}
