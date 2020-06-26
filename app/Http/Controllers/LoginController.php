<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login.loginform');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if ($username == 'admin' && $password == '123456') {
            $request->session()->push('login', true);
            return redirect()->route('show.blogs');
        }
        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
        $request->session()->flash('login-fail', $message);
        return view('login.loginform');
    }
}
