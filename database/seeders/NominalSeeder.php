<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nominal;

class NominalSeeder extends Seeder
{
    public function run()
    {
        $nominals = [
            2500000.00,
            5000000.00,
            10000000.00,
            15000000.00,
            20000000.00,
            25000000.00,
            30000000.00,
            35000000.00,
            40000000.00,
            45000000.00,
            50000000.00,
            55000000.00,
            60000000.00,
            65000000.00,
            70000000.00,
            75000000.00,
            80000000.00,
            85000000.00,
            90000000.00,
            95000000.00,
            100000000.00,
            150000000.00,
            200000000.00,
            250000000.00,
            300000000.00,
            350000000.00,
            400000000.00,
            450000000.00,
            500000000.00,
            1000000000.00,
        ];

        foreach ($nominals as $nominal) {
            Nominal::create(['nominal' => $nominal]);
        }
    }
}
