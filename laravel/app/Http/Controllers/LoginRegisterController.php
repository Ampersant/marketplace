<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:250|unique:user',
            'email' => 'required|email|max:250|unique:user',
            'hash_password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'role_id' => 1,
            'rating' => 100,
            'username' => $request->username,
            'email' => $request->email,
            'hash_password' => $request->hash_password
        ]);

        $credentials = $request->only('email', 'hash_password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('profile')
        ->withSuccess('You have successfully registered & logged in!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function autheticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'hash_password' => 'required'
        ]);
        
        if (Auth::attempt($credentials)) 
        {
           $request->session()->regenerate();
           return redirect()->route('profile')
           ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records'
        ])->onlyInput('email');
    }

    public function profile()
    {
        if(Auth::check())
        {
            return view('auth.profile');
        }

        return redirect()->route('login')
        ->withErrors([
            'email' => 'Please login to access the profile.'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
        ->withSuccess('You have logged out successfully!');
    }
}
