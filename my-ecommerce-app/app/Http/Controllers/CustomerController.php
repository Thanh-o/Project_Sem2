<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{





    // CREATE
    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'nullable|max:20',
            'username' => 'required|min:6|unique:customers,username',
            'password' => 'required|min:6',
            'address' => 'nullable|max:255',
            'admin_id' => 'nullable|exists:admin,admin_id',
        ]);

        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->username = $request->input('username');
        $customer->password = Hash::make($request->input('password'));
        $customer->address = $request->input('address');
        $customer->admin_id = $request->input('admin_id');
        $customer->save();

        return redirect()->back()->with('status', 'Customer created successfully');
    }

    // READ
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // UPDATE
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:customers,email,' . $id,
            'phone' => 'nullable|max:20',
            'username' => 'required|min:6|unique:customers,username,' . $id,
            'password' => 'nullable|min:6',
            'address' => 'nullable|max:255',
            'admin_id' => 'nullable|exists:admin,admin_id',
        ]);

        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->username = $request->input('username');
        if ($request->input('password')) {
            $customer->password = Hash::make($request->input('password'));
        }
        $customer->address = $request->input('address');
        $customer->admin_id = $request->input('admin_id');
        $customer->update();

        return redirect()->route('customers.index');
    }

    // DELETE
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->back()->with('status', 'Customer deleted successfully');
    }
}

