<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create() {
        return view('pages.auth.auth');
    }

    public function auth(Request $request) {
        $auth = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($auth)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->with('error', "Email et/ou Mot de passe incorrect");
    }
}
