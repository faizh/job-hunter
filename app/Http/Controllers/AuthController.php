<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function actLogin(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $user = Auth::user();

            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
