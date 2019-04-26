<?php

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('User')->insert([
            'usuario' => '201800217',
            'nombre' => 'Orlando Odiseo',
            'apPaterno' => 'Belmonte',
            'apMaterno' => 'Flores',
            'email' => 'orlando.bel.jimmy@gmail.com',
            'password' => bcrypt('admin'),
            'tipo' => '1',
            'localidad' => '1',
        ]);

        $limit = 9;
        $word = " abcdefghijklmnopqrstuvwxyzae i o u";
        $capitalWord = " ABCDEFGHIJKLMNOPQRSTUVWXYZAEIOU";

        for($i=0;$i<$limit;$i++) {
            $nombre = "";
            $apP = substr(str_shuffle($word), 0, rand (5,10));
            $apM = substr(str_shuffle($word), 0, rand (5,10));
            $email = substr(str_shuffle($word), 0, rand (5,10)).'@gmail.com';
            $t = rand(0,5);

            if($t==1)
                $t = 2;
            else
                $t = 3;

            for($j = 1; $j <= 2;$j++){
                $nombre .= substr(str_shuffle($word), 0, rand (5 , 10)).' ';
            }

            DB::table('User')->insert([
                'usuario' => '2018'.rand(10 , 30).rand(10 , 70).rand(10 , 60),
                'nombre' => $nombre,
                'apPaterno' => $apP,
                'apMaterno' => $apM,
                'email' => $email,
                'password' => bcrypt('12345'),
                'tipo' => $t,
                'localidad' => rand(1,3),
            ]);
        }
        //
    }
}
