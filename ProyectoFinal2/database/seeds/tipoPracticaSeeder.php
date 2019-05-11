<?php

use Illuminate\Database\Seeder;

class tipoPracticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipoPractica')->insert([
            'tipo' => 'teorico',
        ]);

        DB::table('tipoPractica')->insert([
            'tipo' => 'practico',
        ]);

        DB::table('tipoPractica')->insert([
            'tipo' => 'investigacion',
        ]);
    }
}
