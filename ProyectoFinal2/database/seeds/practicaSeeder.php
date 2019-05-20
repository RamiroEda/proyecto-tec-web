<?php

use Illuminate\Database\Seeder;

class practicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('practica')->insert([
            'noPractica' => 1,
            'nombre' => 'practica 1',
            'tipo' => rand(1,3),
            'objetivo' => 'objetivo ejemplo',
            'descripcion' => 'descripcion de ejemlo',
            'competencias' => 'competencias ejemplo',
            'edc' => 'edc ejemplo',
            'fechaEntrega' => rand(1,30)."/".rand(1,12)."/2019",
            'presupuesto' => 2500,
            'institucion' => 'UPIIZ',
            'programaAcademico_id' => 1,
            'unidadAprendizaje_id' => rand(1,4),
            'profesor_id' => 1,
            'semestre_id' => 1,
            'noAlumnos' => 14,
            'entidadFederativa_id' => 1,
        ]);
    }
}
