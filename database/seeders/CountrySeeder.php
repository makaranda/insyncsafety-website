<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Countries;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = ['INDIA', 'UNITED KINGDOM', 'SINGAPORE', 'UNITED STATES OF AMERICA', 'SRI LANKA', 'CHINA', 'ITALY'];

        foreach ($countries as $country) {
            Countries::create(['name' => $country]);
        }
    }
}
