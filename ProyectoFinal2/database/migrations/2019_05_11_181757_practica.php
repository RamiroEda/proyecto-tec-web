<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Practica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practica', function(Blueprint $table) {
            /*
                entidadFederativa
                competenciasDesarrollar
                profesor
             */
            $table->bigIncrements('id');
            $table->Integer('noPractica');
            $table->string('nombre');
            $table->unsignedBigInteger('tipo');
            $table->string('objetivo');
            $table->string('descripcion');
            $table->string('competencias');
            $table->string('edc');
            $table->date('fechaEntrega');
            $table->float('presupuesto');
            $table->string('institucion');
            $table->unsignedBigInteger('programaAcademico_id');
            $table->unsignedBigInteger('unidadAprendizaje_id');
            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('semestre_id');
            $table->Integer('noAlumnos');
            $table->unsignedBigInteger('entidadFederativa_id');

            $table->foreign('tipo')->references('id')->on('tipoPractica')->ondelete('cascade');
            $table->foreign('programaAcademico_id')->references('id')->on('programaAcademico')->ondelete('cascade');
            $table->foreign('unidadAprendizaje_id')->references('id')->on('unidadAprendizaje')->ondelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('profesor')->ondelete('cascade');
            $table->foreign('semestre_id')->references('id')->on('semestre')->ondelete('cascade');
            $table->foreign('entidadFederativa_id')->references('id')->on('entidadFederativa')->ondelete('cascade');

            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
