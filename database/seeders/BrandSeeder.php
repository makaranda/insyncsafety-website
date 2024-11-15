<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brands;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = ['UDYOGI', 'PORTWEST', 'WORK SAFE', 'WORK GUARD', 'INSYNC', 'NONE', 'HAWS', 'Giordani Giancarlo'];

        foreach ($brands as $brand) {
            Brands::create(['name' => $brand]);
        }
    }
}
