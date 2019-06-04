<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('grupo');
            $table->string('comentario')->nullable();
            $table->unsignedBigInteger('semestre_id');
            $table->unsignedBigInteger('nivel_id');

            $table->foreign('semestre_id')->references('id')->on('semestre')->onDelete('CASCADE');
            $table->foreign('nivel_id')->references('id')->on('nivel')->onDelete('CASCADE');
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
