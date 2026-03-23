<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_view() {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
