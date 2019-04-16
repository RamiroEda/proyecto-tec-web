<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Atiende extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('atiende', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('profesor_id')->references('id')->on('profesor')->ondelete('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos')->ondelete('cascade');
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
