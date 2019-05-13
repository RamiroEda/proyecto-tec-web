<?php

use Illuminate\Database\Seeder;

class gruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=4;$i++) {
            $niv = rand(1,5);
            DB::table('grupos')->insert([
                'grupo' => $niv."cm".$i,
                'semestre_id' => rand(1,6),
                'nivel_id' => $niv,
            ]);
        }
        //
    }
}
