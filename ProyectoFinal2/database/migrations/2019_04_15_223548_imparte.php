<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imparte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('imparte', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('unidadAprendizaje_id');

            $table->foreign('profesor_id')->references('id')->on('profesor')->onDelete('CASCADE');
            $table->foreign('unidadAprendizaje_id')->references('id')->on('unidadAprendizaje')->onDelete('CASCADE');
            $table->timestamps();
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
    }
}
