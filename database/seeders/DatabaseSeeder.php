<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'name' => 'Ilham',
            'email' => 'ilham@gmail.com',
            'password' => Hash::make('ilham'),
        ]);
        $this->call([
            NominalSeeder::class,
        ]);
    }
}
