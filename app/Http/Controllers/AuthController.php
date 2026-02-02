<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLogin()
    {
        return view('login');
    }

    //Check login
    public function checkLogin(Request $request)
    {
        $account = $request->only('email', 'password');
        if (Auth::attempt($account)) {
            return redirect('/product');
        }

        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng',
        ]);
    }

    //logout
}
