<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login_userController extends Controller
{
    function authenticate(Request $request)
    {
   
        $email = $request->input('email');
        $password = $request->input('password');
        // dd($request->all());
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'User'])) {
            
            return redirect()->route('home_user');
        }
        return redirect()->back();
        
    }
    function Logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}