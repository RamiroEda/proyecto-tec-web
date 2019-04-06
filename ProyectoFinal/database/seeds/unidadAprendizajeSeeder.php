<?php

use Illuminate\Database\Seeder;

class unidadAprendizajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=4;$i++) {
            DB::table('un_apr')->insert([
                'nombre' => 'Unidad '.$i,
            ]);
        }
        //
    }
}
