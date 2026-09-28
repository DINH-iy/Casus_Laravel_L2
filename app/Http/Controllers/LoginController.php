<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\Auth\Login; 
use App\Providers\Auth\Logout; 

class LoginController extends Controller
{
    public function show()
    {
        
    }

    public function login(Request $request)
    {
       $login = new Login();
       return $login->login($request);
    }

    public function logout(Request $request)
    {
       $logout = new Logout();
       return $logout->logout($request);
    }
}