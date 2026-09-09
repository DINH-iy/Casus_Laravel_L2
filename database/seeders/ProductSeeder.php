<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $hardware = Category::where('name', 'Hardware')->first();

        $accessoires = Category::where('name', 'Accessoires')->first();

        Product::create([
            'name' => 'Laptop',
            'description' => 'Een krachtige laptop',
            'category_id' => $hardware->id,
        ]);

        Product::create([
            'name' => 'Muis',
            'description' => 'Draadloze muis',
            'category_id' => $accessoires->id,
        ]);

        Product::create([
            'name' => 'Toetsenbord',
            'description' => 'Mechanisch toetsenbord',
            'category_id' => $accessoires->id,
        ]);
    }
}