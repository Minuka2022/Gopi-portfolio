<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === '#123') {
            session(['is_logged_in' => true]);
            session(['user_id' => 'admin']);
            session(['last_activity' => now()]);
            return redirect('/dashboard');
        }

        return back()->withErrors(['Invalid credentials']);
    }

    public function logout()
    {
        session()->forget('is_logged_in');
        return redirect('/login');
    }
}
