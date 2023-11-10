<?php

// app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('auth.login');
        }

        // Handle login logic for POST request
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login.index')->with('error', 'Invalid credentials');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
