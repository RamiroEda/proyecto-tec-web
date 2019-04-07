<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(usuarioSeeder::class);
        $this->call(alumnoSeeder::class);
        $this->call(profesorSeeder::class);
        $this->call(gruposSeeder::class);
        $this->call(catalogoSeeder::class);
        $this->call(unidadAprendizajeSeeder::class);
        $this->call(entidadFederativaSeeder::class);
        $this->call(nivelSeeder::class);
        // $this->call(UsersTableSeeder::class);
        Model::reguard();
    }
}
