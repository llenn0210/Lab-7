<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         if (!session()->has('user')) {
            return redirect('/login')->withErrors(['auth' => 'Please log in first']);
        }

        $user = session('user');
        return view('dashboard', compact('user'));
    }
}
