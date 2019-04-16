<?php

use Illuminate\Database\Seeder;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=9;$i++) {
            DB::table('alumno')->insert([
                'usuario_id' => $i,
                'grupo_id' => rand(1,4),
            ]);
        }
        //
    }
}
