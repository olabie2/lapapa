<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;  // Add this import

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        if(!Auth::guest())
        {
            return redirect()->intended('/');
        }
        return view('components.login');
    }

    // Handle login attempt
    public function login(Request $request)
    {
        if(!Auth::guest())
        {
            return redirect()->intended('/');
        }
        // Define custom validation rules
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->remember)) {
            // If login successful, redirect to intended page or dashboard
            return redirect()->intended('/');
        }

        // If login failed, return back with error message
        return back()->withErrors([
            'email' => __('auth.failed'), // You can use a custom error message here
        ]);
    }

    // Log the user out
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
