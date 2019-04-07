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
            $table->unsignedBigInteger('un_apr_id');
            $table->string('tipo');
            $table->string('descripcion');
            $table->string('objetivo');
            $table->string('edc');
            $table->date('fecha_ntrega');
            $table->foreign('un_apr_id')->references('id')->on('un_apr')->ondelete('cascade');
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
