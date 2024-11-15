<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategories;
use App\Models\Categories;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Eye Protection' => ['Safety Spectacles', 'Accessories', 'Safety Goggles'],
            'Fall Protection' => ['Full Body Harnesses', 'Connecting Lanyard', 'Self Retracting Lifeline', 'Anchorage Devices'],
            'Protective Apparel' => ['High Visibility', 'Rain Wear', 'Heat & Fire Protection', 'Work Wear'],
            'Head Protection' => ['Safety Helmet'],
            'Hand Protection' => ['Cut Resistant Glove'],
            'Spill Control' => ['Oil Spill', 'Chemical Spill', 'Spill Containment Pallets'],
            'Foot Protection' => ['Gum Boots', 'Safety Shoes', 'Waders'],
            'Hearing Protection' => ['Ear Plugs', 'Ear Muffs'],
            'Emergency Station' => ['Safety Shower Station', 'Safety Eyewash', 'Portable Eyewash'],
            'Respiratory Protection' => ['Full Face Mask'],
            'Industrial Products' => ['Convex Mirrors'],
        ];

        foreach ($data as $categoryName => $subCategories) {
            $category = Categories::where('name', $categoryName)->first();
            foreach ($subCategories as $subCategoryName) {
                SubCategories::create([
                    'name' => $subCategoryName,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
