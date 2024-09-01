<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;


class LoginController extends Controller
{
    public function index() {

        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        $settings = Setting::first();

        return view('login', compact('settings'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required',
        ], [
            'name.required' => 'Por favor, digite seu nome de usuário.',
            'password.required' => 'Por favor, digite sua senha.',
        ]);

        $credentials = $request->only('name', 'password');

        if (auth()->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withErrors([
            'name' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->withInput();
    }

    public function logout () {
        auth()->logout();
        return redirect('login');
    }
}
