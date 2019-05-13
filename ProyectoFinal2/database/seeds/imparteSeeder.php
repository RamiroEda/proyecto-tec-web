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
        for($i=1;$i<=4;$i++) {
            DB::table('imparte')->insert([
                'profesor_id' => '1',
                'unidadAprendizaje_id' => $i,
            ]);
        }
    }
}
