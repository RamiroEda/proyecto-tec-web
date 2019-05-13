<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Semestre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
        Schema::create('semestre', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('semestre');
            $table->string('comentario')->nullable();
            $table->timestamps();
        });
    }
}
