<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario');
            $table->string('nombre');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->string('email');
            $table->unsignedBigInteger('programaAcademico_id');
            $table->string('password');
            $table->integer('tipo');
            $table->unsignedBigInteger('localidad');
            $table->foreign('localidad')->references('id')->on('entidadFederativa')->ondelete('cascade');
            $table->foreign('programaAcademico_id')->references('id')->on('programaAcademico')->ondelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
