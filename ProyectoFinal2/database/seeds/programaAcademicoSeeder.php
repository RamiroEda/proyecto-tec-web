<?php

use Illuminate\Database\Seeder;

class programaAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('programaAcademico')->insert([
            'programa' => 'UPIIZ',
            'clave' => '32CXB4332C'
        ]);

        DB::table('programaAcademico')->insert([
            'programa' => 'CECyT 18',
            'clave' => '32CXB4332C'
        ]);
    }
}
