<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
        // READ
        public function index()
        {
            $customers = Customer::all();
            return view('customers.index', compact('customers'));
        }
    
        // CREATE
        public function create()
        {
            return view('customers.create');
        }
    
        public function store(Request $request)
        {
            $data = $request->only(['name', 'email', 'phone', 'username', 'password', 'address']);
    
            $data['password'] = Hash::make($data['password']);
    
            Customer::create($data);
    
            return redirect()->route('customers.index')->with('status', 'Customer created successfully');
        }
    
        // UPDATE
        public function edit($id)
        {
            $customer = Customer::findOrFail($id);
            return view('customers.edit', compact('customer'));
        }
    
        public function update(Request $request, $id)
        {
            $customer = Customer::findOrFail($id);
    
            $data = $request->only(['name', 'email', 'phone', 'username', 'password', 'address']);
    
            if ($request->filled('password')) {
                $data['password'] = Hash::make($request->input('password'));
            }
    
            $customer->update($data);
    
            return redirect()->route('customers.index')->with('status', 'Customer updated successfully!');
        }
    
        // DELETE
        public function delete($id)
        {
            $customer = Customer::findOrFail($id);
            $customer->delete();
    
            return redirect()->back()->with('status', 'Customer deleted successfully');
        }
    
    // Show signup form
    public function showSignupForm()
    {
        return view('customers.signup');
    }

    // Sign up
    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:customers,email',
            'username' => 'required|min:6|unique:customers,username',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->only(['email', 'username', 'password']);
        $data['password'] = Hash::make($data['password']);

        Customer::create($data);

        return redirect()->route('customers.dashboard')->with('status', 'Customer signed up successfully');
    }

    // Show login form
    public function showLoginForm()
    {
        return view('customers.login');
    }

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $customer = Customer::where('username', $request->username)->first();

        if ($customer && Hash::check($request->password, $customer->password)) {
            Session::put('customer_logged_in', true);
            return redirect()->route('customers.dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials.']);
    }

    // Logout
    public function logout()
    {
        Session::forget('customer_logged_in');
        return redirect()->route('customers.login');
    }

    // Dashboard
    public function dashboard()
    {
        return view('customers.dashboard');
    }
}
