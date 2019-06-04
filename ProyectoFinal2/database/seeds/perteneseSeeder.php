<?php

use Illuminate\Database\Seeder;

class perteneseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i<=9;$i++)
            DB::table('pertenece')->insert([
                'alumno_id' => $i,
                'grupo_id' => rand(1,4),
            ]);
    }
}
