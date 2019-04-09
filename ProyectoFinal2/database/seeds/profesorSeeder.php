<?php

use Illuminate\Database\Seeder;

class profesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesor')->insert([
            'usuario_id' => 1,
        ]);
        //
    }
}
