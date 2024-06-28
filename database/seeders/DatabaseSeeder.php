<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\Tipo::factory(1)->create([
            "nombre" => "Basico",
            "descripcion" => "Usuario pichuelo"
        ]);

        \App\Models\Tipo::factory(1)->create([
            "nombre" => "Avanzado",
            "descripcion" => "Usuario re pro"
        ]);

        \App\Models\User::factory(10)->create();
    }
}
