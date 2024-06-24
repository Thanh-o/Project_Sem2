<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'nullable|max:20',
            'username' => 'required|min:6|unique:customers,username',
            'password' => 'required|min:6',
            'address' => 'nullable|max:255',
            'admin_id' => 'nullable|exists:admin,admin_id',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'username.required' => 'The username field is required.',
            'username.min' => 'The username must be at least 6 characters.',
            'username.unique' => 'The username has already been taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 6 characters.',
            'admin_id.exists' => 'The selected admin ID is invalid.',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Customer::create($validatedData);

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
    $validatedData = $request->validate([
        'name' => 'required|max:50',
        'email' => 'required|email|unique:customers,email,' . $id . ',customer_id',
        'phone' => 'nullable|max:20',
        'username' => 'required|min:6|unique:customers,username,' . $id . ',customer_id',
        'password' => 'nullable|min:6',
        'address' => 'nullable|max:255',
        'admin_id' => 'nullable|exists:admin,admin_id',
    ], [
        'name.required' => 'The name field is required.',
        'email.required' => 'The email field is required.',
        'email.email' => 'The email must be a valid email address.',
        'email.unique' => 'The email has already been taken.',
        'username.required' => 'The username field is required.',
        'username.min' => 'The username must be at least 6 characters.',
        'username.unique' => 'The username has already been taken.',
        'password.min' => 'The password must be at least 6 characters.',
        'admin_id.exists' => 'The selected admin ID is invalid.',
    ]);

    $customer = Customer::findOrFail($id);

    if ($request->filled('password')) {
        $validatedData['password'] = Hash::make($request->input('password'));
    } else {
        unset($validatedData['password']); 
    }

    $customer->update($validatedData);

    return redirect()->route('customers.index')->with('status', 'Customer updated successfully!');
}


    // DELETE
    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->back()->with('status', 'Customer deleted successfully');
    }
}
