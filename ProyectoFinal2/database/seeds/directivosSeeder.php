<?php

use Illuminate\Database\Seeder;

class directivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<=8;$i++) {
            DB::table('directivos')->insert([
                'id' => $i,
            ]);
        }
    }
}
