<?php

use Illuminate\Database\Seeder;

class atiendeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<=4;$i++){
            DB::table('atiende')->insert([
                'profesor_id' => '1',
                'grupo_id' => rand(1,4),
            ]);
        }
    }
}
