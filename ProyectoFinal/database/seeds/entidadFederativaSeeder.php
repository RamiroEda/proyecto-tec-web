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
        DB::table('ent_fed')->insert([
            'entidad' => 'Zacatecas'
        ]);

        DB::table('ent_fed')->insert([
            'entidad' => 'Fresnillo'
        ]);

        DB::table('ent_fed')->insert([
            'entidad' => 'Calera'
        ]);
        //
    }
}
