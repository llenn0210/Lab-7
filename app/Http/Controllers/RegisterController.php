<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle registration
   public function register(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:100',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed'
    ]);

    User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/login')->with('success', 'Registered successfully. Please login.');
}

}
