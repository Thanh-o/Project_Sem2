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
    return view('orders.create', [
        'customers' => Customer::all(),
        'employees' => Employee::all(),
        'statuses' => [
            'cancelled' => 'Cancelled',
            'processing' => 'Processing',
            'completed' => 'Completed',
        ],
        'payments' => [
            'paycash' => 'Pay Cash',
            'deposit' => 'Deposit',
            'installment' => 'Installment',
        ],
    ]);
}

public function store(Request $request)
{
    Order::create($request->only(['customer_id', 'employee_id', 'total_amount', 'status', 'payment']));

    return redirect()->route('orders.index')->with('status', 'Order created successfully');
}


    // READ
    public function index()
{
    $orders = Order::with(['customer', 'employee'])->get();
    return view('orders.index', compact('orders'));
}


    public function show($id)
    {
        return view('orders.show', ['order' => Order::findOrFail($id)]);
    }

    // UPDATE
    public function edit($id)
{
    $order = Order::findOrFail($id);
    
    return view('orders.edit', [
        'order' => $order,
        'customers' => Customer::all(),
        'employees' => Employee::all(),
        'statuses' => [
            'cancelled' => 'Cancelled',
            'processing' => 'Processing',
            'completed' => 'Completed',
        ],
        'payments' => [
            'paycash' => 'Pay Cash',
            'deposit' => 'Deposit',
            'installment' => 'Installment',
        ],
    ]);
}

public function update(Request $request, $id)
{
    $order = Order::findOrFail($id);
    $order->update($request->only(['customer_id', 'employee_id', 'total_amount', 'status', 'payment']));

    return redirect()->route('orders.index')->with('status', 'Order updated successfully');
}


    // DELETE
    public function delete($id)
    {
        Order::findOrFail($id)->delete();

        return redirect()->back()->with('status', 'Order deleted successfully');
    }
}
