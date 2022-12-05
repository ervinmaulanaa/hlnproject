<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:225',
            'telepon' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create ($data);
        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginEvent(Request $request)

    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->with('error', 'Email atau Password Salah');
    }

    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    
}
