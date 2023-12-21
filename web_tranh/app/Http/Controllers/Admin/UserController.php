<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index (Request $request) {
        $search = $request->get('search', '');
        $users = User::where('fullname', 'like', '%'.$search.'%')->paginate(5);
        return view('admin.user.index',['data' => $users]);
    }

    function create() {
        return view('admin.user.create');
    }

    function onCreate(Request $request) {
        $validator = Validator::make($request->all(), [
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
        if ($validator->fails()) {
            return redirect()->route('user.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        User::create([
            'username' => $request->input('username', ''),
            'fullname' => $request->input('fullname', ''),
            'password' => Hash::make('password'),
            'email' => $request->input('email', ''),
            'role' => $request->input('role', ''),
            'suspend' => $request->input('suspend', ''),
        ]);
        return redirect()->route('user');

    }
    function edit(Request $request) {
        $user = User::find($request->id);
        return view('admin.user.update', compact('user'));
    }

    function onEdit(Request $request) {
        $id = $request->id;
        $user = User::find($id);
        if ($user) {
            $user->update([
            'username' => $request->input('username', ''),
            'fullname' => $request->input('fullname', ''),
            'password' => $request->input('password', ''),
            'email' => $request->input('email', ''),
            'role' => $request->input('role', ''),
            'suspend' => $request->input('suspend', ''),
            ]);
        }
        return redirect()->route('user');
    }
    function delete(Request $request) {
        $id = $request->id;
        // Product::where($id)->delete($id);
        User::find($id)->delete($id);
        return redirect()->route('user');
    }
}