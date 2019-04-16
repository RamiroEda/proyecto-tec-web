<?php

use Illuminate\Database\Seeder;

class realizaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('realiza')->insert([
            'grupo_id' => rand(1,4),
            'unidadAprendizaje_id' => rand(1,4),
        ]);
    }
}
