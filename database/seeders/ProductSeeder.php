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
        $laptops = Category::where('name', 'Laptops')->first();
        $monitoren = Category::where('name', 'Monitoren')->first();

        Product::create([
            'name' => 'Gaming PC',
            'description' => 'Krachtige gaming computer.',
            'category_id' => $hardware->id,
        ]);

        Product::create([
            'name' => 'Draadloze muis',
            'description' => 'Draadloze ergonomische muis.',
            'category_id' => $accessoires->id,
        ]);

        Product::create([
            'name' => 'Laptop Pro 15',
            'description' => '15 inch laptop voor werk en studie.',
            'category_id' => $laptops->id,
        ]);

        Product::create([
            'name' => '27 inch Monitor',
            'description' => '27 inch IPS-monitor met hoge resolutie.',
            'category_id' => $monitoren->id,
        ]);
    }
}