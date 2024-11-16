<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Products;

class ProductSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Products::all(); // Retrieve all products
        $slugTracker = [];

        foreach ($products as $product) {
            // Base slug from the product title
            $baseSlug = Str::slug($product->title);

            $slug = $baseSlug;
             // Handle duplicates within the same seeder execution and in the database
             if (isset($slugTracker[$baseSlug])) {
                $slugTracker[$baseSlug]++;
                $slug = "{$baseSlug}-{$slugTracker[$baseSlug]}";
            } else {
                $slugTracker[$baseSlug] = 1;

                // Check for existing slugs in the database
                $count = 1;
                while (Products::where('slug', $slug)->exists()) {
                    $count++;
                    $slug = "{$baseSlug}-{$count}";
                }

                $slugTracker[$baseSlug] = $count; // Track the latest number used
            }

            // Update the product with the unique slug
            $product->update(['slug' => $slug]);
        }
    }
}
