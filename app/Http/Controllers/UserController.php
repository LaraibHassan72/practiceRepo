<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard'); 
        }

        return redirect('/')->with('message', 'Invalid login credentials');
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
    
    public function dashboard(){
    return view('dashboard');
    }

}
