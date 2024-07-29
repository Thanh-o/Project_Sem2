<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;

class OrderController extends Controller
{
    // CREATE
    public function create()
{
    return view('orders.create', [
        'customers' => Customer::all(),
        // 'employees' => Employee::all(),
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
    Order::create($request->only(['customer_id','employee', 'total_amount', 'status', 'payment']));

    return redirect()->route('orders.index')->with('status', 'Order created successfully');
}


    // READ
    public function index()
{
    $orders = Order::with(['customer'])->get();
    $totalOrders = Order::count();
    $totalCus = Customer::count();
    $totalEm = Employee::count();
    $totalPro = Product::count();
    return view('admin.orders.index', compact('orders', 'totalOrders', 'totalCus', 'totalEm', 'totalPro'));
}

    // UPDATE
    public function edit($id)
{
    $order = Order::findOrFail($id);
    
    return view('orders.edit', [
        'order' => $order,
        'customers' => Customer::all(),
        // 'employees' => Employee::all(),
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
    $order->update($request->only(['customer_id','employee', 'total_amount', 'status', 'payment']));

    return redirect()->route('admin.orders.index')->with('status', 'Order updated successfully');
}


    // DELETE
    public function delete($id)
    {
        $order = Order::findOrFail($id);
        
        $order->orderDetails()->delete();
        
        $order->delete();
        
        return redirect()->back()->with('status', 'Order deleted successfully');
    }

    //Show
    public function show($orderId)
    {
        $order = Order::with('orderDetails.product')
                        ->findOrFail($orderId);

        return view('orders.show', compact('order'));
    }

    //Cancel 
    public function cancel(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Cancelled';
        $order->save();

        return redirect()->route('order.show', $id)->with('success', 'Order has been cancelled.');
    }
    //Processing
    public function processing(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Processing';
        $order->save();

        return redirect()->route('order.show', $id)->with('success', 'Order has been processed.');
    }
    //Complete
    public function complete(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Completed';
        $order->save();

        return redirect()->route('order.show', $id)->with('success', 'Successful delivery.');
    }
}
