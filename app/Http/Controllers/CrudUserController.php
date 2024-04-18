<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudUserController extends Controller
{
    // Home
    public function home()
    {
        return view('crud.home');
    }

    // Login
    public function login()
    {
        return view('crud.login');
    }
    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('list')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    // SignUp
    public function signUp()
    {
        return view('crud.signup');
    }

    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password1' => 'required|min:6',
            'password2' => 'required|min:6|same:password1', // kiểm tra mật khẩu 2 khớp nhau
        ]);

        $data = $request->all();
        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password1'])
        ]);

        return redirect("list")->withSuccess('Bạn đã đăng nhập thành công');
    }
}
