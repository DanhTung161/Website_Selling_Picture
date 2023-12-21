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

        
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'User'])) {
            dd($request->all());
            // login thành công
            return redirect()->route('home');
        }
    }
    function adminLogout() {
        Auth::logout();
        return redirect()->route('login');
    }
}