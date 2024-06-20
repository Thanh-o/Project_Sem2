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

        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->username = $request->input('username');
        $employee->password = Hash::make($request->input('password'));
        $employee->hire_date = $request->input('hire_date');
        $employee->job_title = $request->input('job_title');
        $employee->admin_id = $request->input('admin_id');
        $employee->save();

        return redirect()->back()->with('status', 'Employee created successfully');
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
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:employees,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'username' => 'required|string|min:6|unique:employees,username,' . $id,
            'password' => 'nullable|string|min:6',
            'hire_date' => 'nullable|date',
            'job_title' => 'nullable|string|max:50',
            'admin_id' => 'nullable|exists:admins,admin_id'
        ]);

        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->username = $request->input('username');
        if ($request->input('password')) {
            $employee->password = Hash::make($request->input('password'));
        }
        $employee->hire_date = $request->input('hire_date');
        $employee->job_title = $request->input('job_title');
        $employee->admin_id = $request->input('admin_id');
        $employee->update();

        return redirect()->route('employees.index');
    }

    // DELETE
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->back()->with('status', 'Employee deleted successfully');
    }
}
