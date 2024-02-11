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
            'logout', 'profile'
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:250|unique:users',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create([
            'name' => 'admin2',
            'surname' => 'admin2',
            'role_id' => 1,
            'rating' => 100,
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password']
        ]);

        // $credentials['password'] = bcrypt($credentials['password']);
        Auth::attempt([
            'email' => $validatedData['email'],
            'password' => $validatedData['password']
        ]);
        $request->session()->regenerate();
        return redirect()->route('profile')
        ->withSuccess('You have successfully registered & logged in!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // dd($credentials);
        // $credentials['password'] = bcrypt($credentials);
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
