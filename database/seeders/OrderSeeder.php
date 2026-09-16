<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $jan = User::where('email', 'jan@webshop.nl')->first();
        $lisa = User::where('email', 'lisa@webshop.nl')->first();

        Order::create([
            'orderdate' => now(),
            'user_id' => $jan->id,
            'status' => 1,
        ]);

        Order::create([
            'orderdate' => now(),
            'user_id' => $lisa->id,
            'status' => 0,
        ]);
    }
}