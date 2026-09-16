<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderRow;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderRowSeeder extends Seeder
{
    public function run(): void
    {
        $orders = Order::all();

        $gamingPc = Product::where('name', 'Gaming PC')->first();
        $mouse = Product::where('name', 'Draadloze muis')->first();
        $laptop = Product::where('name', 'Laptop Pro 15')->first();

        OrderRow::create([
            'order_id' => $orders[0]->id,
            'product_id' => $gamingPc->id,
        ]);

        OrderRow::create([
            'order_id' => $orders[0]->id,
            'product_id' => $mouse->id,
        ]);

        OrderRow::create([
            'order_id' => $orders[1]->id,
            'product_id' => $laptop->id,
        ]);
    }
}