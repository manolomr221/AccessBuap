<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccesoVehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceso_vehiculos', function (Blueprint $table) {
            $table->increments('id');
                $table->dateTime('hora_entrada');
                $table->dateTime('hora_salida');
                $table->string('acceso_entrada');
                $table->string('acceso_salida');
                $table->string('placas');
                $table->integer('matricula_a')->nullable();
                $table->integer('matricula_t')->nullable();
                $table->integer('matricula_v')->nullable();

                $table->foreign('matricula_a')->references('matricula')->on('alumnos')->onDelete('cascade');
                $table->foreign('matricula_t')->references('matricula')->on('trabajadores')->onDelete('cascade');
                $table->foreign('matricula_v')->references('no_id')->on('visitantes')->onDelete('cascade');
                $table->foreign('placas')->references('placas')->on('vehiculos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('acceso_vehiculos');
        Schema::table('acceso_vehiculos', function($table) {
            $table->dropColumn('placas');
        });
    }
}