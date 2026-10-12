<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\Auth\Login; 
use App\Providers\Auth\Logout; 
use App\Providers\Auth\Show; 

class AuthController extends Controller
{
    public function show()
    {
        $show = new Show();
         return $show->show();
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