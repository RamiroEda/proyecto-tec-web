<?php

use Illuminate\Database\Seeder;

class nivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=5;$i++) {
            DB::table('nivel')->insert([
                'nivel' => $i,
            ]);
        }
        //
    }
}
