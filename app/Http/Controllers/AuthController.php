<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Add your authentication logic here
        // For simplicity, we will just redirect to the dashboard for now
        return redirect('/dashboard');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Add your registration logic here
        // For simplicity, we will just redirect to the dashboard for now
        return redirect('/dashboard');
    }
}
