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
            DB::table('grupos')->insert([
                'grupo' => "2cm".$i,
            ]);
        }
        //
    }
}
