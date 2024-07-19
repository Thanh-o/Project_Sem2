<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Employee;
use App\Models\OrderDetail;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        return redirect()->route('employees.index')->with('status', 'Employee created successfully');
    }

    // READ
    public function index($id)
    {
        $employees = Employee::all();
        $newem = Employee::latest()->take(5)->get();
        $totalOrders = Order::count();
        $totalCus = Customer::count();
        $totalEm = Employee::count();
        $totalPro = Product::count();
        $store = $this->store();
        return view('employees.index', compact('employees', 'newem', 'totalOrders', 'totalCus', 'totalEm', 'totalPro', 'store'));
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

        return redirect()->route('employees.index')->with('status', 'Employee updated successfully!');
    }

    // DELETE
    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('status', 'Employee deleted successfully');
    }
}
