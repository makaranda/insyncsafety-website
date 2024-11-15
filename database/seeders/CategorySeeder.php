<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Eye Protection',
            'Fall Protection',
            'Protective Apparel',
            'Head Protection',
            'Hand Protection',
            'Spill Control',
            'Foot Protection',
            'Hearing Protection',
            'Emergency Station',
            'Respiratory Protection',
            'Industrial Products',
        ];

        foreach ($categories as $category) {
            Categories::create(['name' => $category]);
        }
    }
}
