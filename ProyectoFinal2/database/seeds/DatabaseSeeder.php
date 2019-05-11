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

        $this->call(entidadFederativaSeeder::class);
        $this->call(nivelSeeder::class);
        $this->call(gruposSeeder::class);
        $this->call(usuarioSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(profesorSeeder::class);
        $this->call(alumnoSeeder::class);
        $this->call(unidadAprendizajeSeeder::class);
        $this->call(tipoPracticaSeeder::class);
        $this->call(practicaSeeder::class);
        $this->call(atiendeSeeder::class);
        $this->call(imparteSeeder::class);
        $this->call(realizaSeeder::class);

        Model::reguard();
    }
}
