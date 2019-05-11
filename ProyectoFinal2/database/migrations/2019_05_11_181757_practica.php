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
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->date('fechaEntrega');
            $table->string('edc');
            $table->string('objetivo');
            $table->unsignedBigInteger('tipo');
            $table->string('descripcion');
            $table->unsignedBigInteger('unidadAprendizaje_id');
            $table->foreign('unidadAprendizaje_id')->references('id')->on('unidadAprendizaje')->ondelete('cascade');
            $table->foreign('tipo')->references('id')->on('tipoPractica')->ondelete('cascade');
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
