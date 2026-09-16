<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $products = Product::with('category')
            ->latest()
            ->take(6)
            ->get();

        return view('welcome', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}