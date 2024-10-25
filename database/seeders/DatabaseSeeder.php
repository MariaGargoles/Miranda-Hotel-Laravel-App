<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear 10 usuarios con correos electrónicos únicos
        User::factory(10)->create();

        // Crear un usuario específico con un correo específico si no existe
        User::firstOrCreate([
            'email' => 'test@example.com'
        ], [
            'name' => 'Test User',
        ]);
    }
}
