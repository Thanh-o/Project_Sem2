<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showForm()
    {
        return view('auth.form');
    }

    public function signIn(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the admin
        $credentials = $request->only('username', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed, redirect to intended page
            return redirect()->intended('dashboard');
        }

        // Authentication failed, redirect back with input and error message
        return back()->withInput($request->only('username'))->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function signUp(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string|unique:admin,username',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new admin
        $customer = Customer::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // Log the admin in
        Auth::guard('customer')->login($customer);

        // Redirect to intended page
        return redirect()->intended('home');
    }
}
