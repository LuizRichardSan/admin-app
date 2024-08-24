<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        $credentials = $request->only('name', 'password');
        if (auth()->attempt($credentials)) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function logout () {
        auth()->logout();
        return redirect('/login');
    }
}
