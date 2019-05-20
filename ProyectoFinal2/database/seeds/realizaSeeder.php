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
        for($i=1;$i<=4;$i++) {
            DB::table('realiza')->insert([
                'grupo_id' => '1',
                'practica_id' => 1,
            ]);
        }
    }
}
