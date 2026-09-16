<?php

namespace App\Http\Controllers;

use App\Providers\Products\Index;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = new Index();
        return  $index->Index();
    }

}