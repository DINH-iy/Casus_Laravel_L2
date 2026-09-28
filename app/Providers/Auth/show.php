<?php

namespace App\Providers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Show
{
    public function show()
    {
        return view('auth.login');
    }
}