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
        User::firstOrCreate(
            ['email' => 'corsec@gmail.com'],
            [
                'name' => 'Corsec',
                'password' => Hash::make('Corsec@123'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'ilham@gmail.com'],
            [
                'name' => 'Ilham',
                'password' => Hash::make('Muhammad@1234'),
            ]
        );

        $this->call([
            NominalSeeder::class,
        ]);
    }
}
