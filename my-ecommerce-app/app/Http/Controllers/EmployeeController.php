<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'nullable|string|max:20',
            'username' => 'required|string|unique:employees,username|min:6',
            'password' => 'required|string|min:6',
            'hire_date' => 'nullable|date',
            'job_title' => 'nullable|string|max:50',
            'admin_id' => 'nullable|exists:admins,admin_id'
        ]);

        $employee = new Employee($request->except('password'));
        $employee->password = Hash::make($request->input('password'));
        $employee->save();

        return redirect()->route('employees.index')->with('status', 'Employee created successfully');
    }

    // READ
    public function index()
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
    $validatedData = $request->validate([
        'name' => 'required|max:50',
        'email' => 'required|email|unique:employees,email,' . $id . ',employee_id', 
        'phone' => 'nullable|max:20',
        'username' => 'required|min:6|unique:employees,username,' . $id . ',employee_id', 
        'password' => 'nullable|min:6',
        'hire_date' => 'nullable|date',
        'job_title' => 'nullable|max:50',
        'admin_id' => 'nullable|exists:admins,admin_id'
    ]);

    $employee = Employee::findOrFail($id); 

    
    if ($request->filled('password')) {
        $validatedData['password'] = Hash::make($request->input('password'));
    } else {
        unset($validatedData['password']); 
    }

    $employee->update($validatedData);

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
