<?php

namespace App\Providers\Home;

use App\Models\Category;
use App\Models\Product;

class Home
{
    public function Home()
    {
        $categories = Category::withCount('products')
            ->orderBy('name')
            ->get();

        $products = Product::with([
                'category',
                'currentPrice',
            ])
            ->withCount('reviews')
            ->orderByDesc('id')
            ->limit(6)
            ->get();

        return view('welcome', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}