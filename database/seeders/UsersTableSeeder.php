<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpassword'), // Remplacez par votre mot de passe spécifique
            'role' => 'Administrateur'
        ]);

        // Créer 10 utilisateurs aléatoires
        User::factory()->count(10)->create();
    }
}
