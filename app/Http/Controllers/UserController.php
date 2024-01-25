<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
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
            // $userModel = Auth::userModel();   

            // if ($userModel->role === 'admin') {
            //     return redirect('/admindashboard');
            // } else {
            //     return redirect('/userdashboard');
            // } 
        }

        return redirect()->back()->with('message', 'Invalid login credentials');
    }


    public function showRegistrationForm()
    {
        return view('userRegister');
    }
    



    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:user',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'in:admin,user',
    ]);

        $userModel=UserModel::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),   
        'role' => $request->role ?? 'user|admin', 
    ]);
    return redirect('/login')->with('message', 'Registration successful!');
}

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
    
    // public function dashboard(){
    // return view('dashboard');
    // }
     
    public function dashboard()
    {
        $user = Auth::user();   

        if ($user->role === 'admin') {
            return redirect('/admindashboard');
        } else {
            return redirect('/userdashboard');
        }
    }

}
