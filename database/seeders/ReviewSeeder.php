<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $jan = User::where('email', 'jan@webshop.nl')->first();
        $lisa = User::where('email', 'lisa@webshop.nl')->first();

        $gamingPc = Product::where('name', 'Gaming PC')->first();
        $mouse = Product::where('name', 'Draadloze muis')->first();
        $laptop = Product::where('name', 'Laptop Pro 15')->first();

        Review::create([
            'comment' => 'Erg tevreden met deze computer.',
            'user_id' => $jan->id,
            'product_id' => $gamingPc->id,
        ]);

        Review::create([
            'comment' => 'Prima muis voor deze prijs.',
            'user_id' => $lisa->id,
            'product_id' => $mouse->id,
        ]);

        Review::create([
            'comment' => 'Goede laptop en snel geleverd.',
            'user_id' => $jan->id,
            'product_id' => $laptop->id,
        ]);
    }
}