<?php

namespace App\Providers\Orders;

use App\Models\Category;
use App\Models\Order;

class Index
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
        // return $categories->toArray();
    }
}