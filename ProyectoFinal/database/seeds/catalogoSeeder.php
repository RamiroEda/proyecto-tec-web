<?php

use Illuminate\Database\Seeder;

class catalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogo')->insert([
            'tipo' => 'Programa académico'
        ]);

        DB::table('catalogo')->insert([
            'tipo' => 'Semestre'
        ]);

        DB::table('catalogo')->insert([
            'tipo' => 'Nivel'
        ]);

        DB::table('catalogo')->insert([
            'tipo' => 'Grupo'
        ]);

        DB::table('catalogo')->insert([
            'tipo' => 'Tipo de Práctica'
        ]);

        DB::table('catalogo')->insert([
            'tipo' => 'Entidad Federativa'
        ]);

        DB::table('catalogo')->insert([
            'tipo' => 'Unidad de Aprendizaje'
        ]);

        DB::table('catalogo')->insert([
            'tipo' => 'Profesor'
        ]);
        //
    }
}
