<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_view() {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('fail', 'Սխալ մուտքանուն և ծածկագիր');
    }
    public function reset_view() {
        return view('admin.auth.reset');
    }

    public function reset(Request $request) {
        $data = $request->except('_token');
        $user = User::findOrFail(auth()->user()->id);

        if(Hash::check($data['current_password'], $user->password)) {
            if($user->update(['password' => Hash::make($data['new_password']) ])) {
                return redirect()->route('admin.dashboard')->with('success', 'Ծածկագիրը փոփոխվեց');
            } else {
                return back()->with('fail', 'Փորձեք կրկին');
            }
        } else {
            return back()->with('fail', 'Ծածկագիրը սխալ է');
        }
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
