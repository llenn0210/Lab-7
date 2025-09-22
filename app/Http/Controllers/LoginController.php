<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Find user
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Save user to session
            session(['user' => $user]);
            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    // Handle logout
    public function logout()
    {
        session()->forget('user');
        return redirect('/login')->with('success', 'You have logged out.');
    }
}
