<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Employee;

class OrderController extends Controller
{
    // CREATE
    public function create()
    {
        $customers = Customer::all(); 
        $employees = Employee::all(); 
        return view('orders.create', compact('customers', 'employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'employee_id' => 'required|exists:employees,employee_id',
            'total_amount' => 'required|numeric|min:0',
            'status' => 'required|max:50',
        ]);

        // Create new order
        $order = new Order;
        $order->customer_id = $request->input('customer_id');
        $order->employee_id = $request->input('employee_id');
        $order->total_amount = $request->input('total_amount');
        $order->status = $request->input('status');
        $order->save();

        return redirect()->route('orders.index')->with('status', 'Product created successfully');
    }

    // READ
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    // UPDATE
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'employee_id' => 'required|exists:employees,employee_id',
            'total_amount' => 'required|numeric|min:0',
            'status' => 'required|max:50',
        ]);

        // Update the order
        $order = Order::findOrFail($id);
        $order->customer_id = $request->input('customer_id');
        $order->employee_id = $request->input('employee_id');
        $order->total_amount = $request->input('total_amount');
        $order->status = $request->input('status');
        $order->save();

        return redirect()->route('orders.index');
    }

    // DELETE
    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->back()->with('status', 'Order deleted successfully');
    }
}
