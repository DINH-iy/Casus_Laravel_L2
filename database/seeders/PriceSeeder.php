<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        $gamingPc = Product::where('name', 'Gaming PC')->first();
        $mouse = Product::where('name', 'Draadloze muis')->first();
        $laptop = Product::where('name', 'Laptop Pro 15')->first();
        $monitor = Product::where('name', '27 inch Monitor')->first();

        Price::create([
            'price' => 1299.99,
            'effdate' => now(),
            'product_id' => $gamingPc->id,
        ]);

        Price::create([
            'price' => 39.95,
            'effdate' => now(),
            'product_id' => $mouse->id,
        ]);

        Price::create([
            'price' => 899.00,
            'effdate' => now(),
            'product_id' => $laptop->id,
        ]);

        Price::create([
            'price' => 249.95,
            'effdate' => now(),
            'product_id' => $monitor->id,
        ]);
    }
}