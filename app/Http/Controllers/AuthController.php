<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function showSignup()
    {
        return view('Authentication.signup');
    }

    public function showLogin()
    {
        return view('Authentication.login');
    }

    public function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
}
