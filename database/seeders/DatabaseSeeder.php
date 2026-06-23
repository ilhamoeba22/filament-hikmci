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
            'name' => 'Corsec',
            'email' => 'corsec@gmail.com',
            'password' => Hash::make('Corsec@123'),
        ]);

        User::create([
            'name' => 'Ilham',
            'email' => 'ilham@gmail.com',
            'password' => Hash::make('Muhammad@1234'),
        ]);

        $this->call([
            NominalSeeder::class,
        ]);
    }
}
