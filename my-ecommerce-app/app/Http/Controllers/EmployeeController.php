<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    // CREATE
    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'name', 'email', 'phone', 'username', 'password', 'hire_date', 'job_title'
        ]);
    
        $data['password'] = Hash::make($data['password']);
    
        $employee = new Employee($data);
        $employee->save();
    
        
        if (Session::has('admin_logged_in') && Session::get('admin_logged_in') === true) {
            
            return redirect()->route('admin.employees.index')->with('status', 'Employee added successfully');
        } else {
            
            return redirect()->route('employees.index')->with('status', 'Employee added successfully');
        }
    }
    
    
    
    // READ
    // Admin
    public function index()
    {
        $employees = Employee::all();
        $totalOrders = Order::count();
        $totalCus = Customer::count();
        $totalEm = Employee::count();
        $totalPro = Product::count();
        
        return view('admin.employees.index', compact('employees', 'totalOrders', 'totalCus', 'totalEm', 'totalPro'));
    }
    
    // Employee
    public function eindex()
    {
        $employees = Employee::all();      
        return view('employees.index', compact('employees'));
    }

    // UPDATE
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
    
        $data = $request->only([
            'name', 'email', 'phone', 'username', 'password', 'hire_date', 'job_title'
        ]);
    
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }
    
        $employee->update($data);
    
        
        if (Session::has('admin_logged_in') && Session::get('admin_logged_in') === true) {
            
            return redirect()->route('admin.employees.index')->with('status', 'Employee updated successfully');
        } else {
            
            return redirect()->route('employees.index')->with('status', 'Employee updated successfully');
        }
    }
    
    
    
    // DELETE
    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('status', 'Employee deleted successfully');
    }
}
