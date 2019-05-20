<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Realiza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('realiza', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('grupo_id');
            $table->unsignedBigInteger('practica_id');
            $table->foreign('grupo_id')->references('id')->on('grupos')->ondelete('cascade');
            $table->foreign('practica_id')->references('id')->on('practica')->ondelete('cascade');
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
