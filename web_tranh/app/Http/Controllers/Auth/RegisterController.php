<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    protected function guard() {
        return Auth::guard('guard-name');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|unique:users|max:100',
            'fullname' => 'required',
            'password' => 'required|min:8',
            // |confirmed
            // |regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/
            'email' => 'required|email',
            'role',
            'suspend'
        ], [
            'username.required' => 'Bạn phải nhập tên đăng nhập vào',
            'username.unique' => 'tên đăng nhập đã có sẵn',
            'username.max' => 'Tên quá dài',
            'fullname.required' => 'Bạn chưa nhập họ tên',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu quá ngắn',
            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Không đúng định dạng email',

        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'suspend' => $data['suspend'],
            'role' => $data['Admin'],
        ]);
        return redirect()->route('admin_login');
    }
}