<?php

use Illuminate\Database\Seeder;

class imparteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('imparte')->insert([
            'profesor_id' => '1',
            'unidadAprendizaje_id' => rand(1,4),
        ]);
    }
}
