<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function deposit()
    {
        return view('login.deposit', []);

    }
    public function login(Request $request)
    {

        return view('dashboard', []);

    }
    public function register(Request $request)
    {

        return view('login.deposit', []);

    }
}
