<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'Admin'])) {
            // login thành công
            return redirect()->route('home_admin');
        }
    }

    function adminLogout() {
        Auth::logout();
        return redirect()->route('admin_login');
    }
}