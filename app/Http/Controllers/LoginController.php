<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('signin');
    }

    public function login(Request $request) {
        
        // validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        // coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/home')->with('success', 'Login berhasil!');
        }

        // jika gagal
        return back()->withErrors([
            'email' => 'Email atau Password salah'
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sign-in')->with('success', 'Logout berhasil.');
    }
}
