<?php

use Illuminate\Database\Seeder;

class entidadFederativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entidadFederativa')->insert([
            'entidad' => 'Zacatecas'
        ]);

        DB::table('entidadFederativa')->insert([
            'entidad' => 'Fresnillo'
        ]);

        DB::table('entidadFederativa')->insert([
            'entidad' => 'Calera'
        ]);
        //
    }
}
