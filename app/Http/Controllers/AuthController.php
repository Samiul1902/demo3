<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show Register Page
    public function showRegister() {
        return view('auth.register');
    }

    // Handle Registration Logic
    public function register(Request $request) {
        // 1. Validate Input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string',
            'password' => 'required|min:6|confirmed', // expects password_confirmation field
        ]);

        // 2. Create User
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'customer', // Default role
            'avatar' => "[https://ui-avatars.com/api/?name=](https://ui-avatars.com/api/?name=)" . urlencode($request->name) . "&color=7F9CF5&background=EBF4FF"
        ]);

        // 3. Log them in immediately
        Auth::login($user);

        // 4. Redirect to Home
        return redirect('/')->with('success', 'Account created successfully!');
    }

    // Show Login Page
    public function showLogin() {
        return view('auth.login');
    }

    // Handle Login Logic
    public function login(Request $request) {
        // 1. Validate
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. Attempt Login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // 3. Fail
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle Logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}