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

    // Đăng ký
    public function signup()
    {
        return view('crud.signup');
    }

    public function postUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password1' => 'required|min:4',
            'password2' => 'required|min:4|same:password1', // xác thực p2=p1
        ]);

        $data = $request->all();
        $check = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password1'])
        ]);

        return redirect("login")->withSuccess('Đăng Ký thành công');
    }
}
