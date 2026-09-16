<?php

namespace App\Http\Controllers;
use App\Providers\Home\Home;

class HomeController extends Controller
{
    public function index()
    {
        $home = new Home();
        return $home->Home();
    }
}