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
        for($i=1;$i<=10;$i++) {
            DB::table('practica')->insert([
                'nombre' => 'practica '.$i,
                'fechaEntrega' => rand(1,30)."/".rand(1,12)."/2019",
                'edc' => 'edc ejemplo',
                'objetivo' => 'objetivo ejemplo',
                'tipo' => rand(1,3),
                'descripcion' => 'descripcion de ejemlo',
                'unidadAprendizaje_id' => rand(1,4),
            ]);

        }
    }
}
