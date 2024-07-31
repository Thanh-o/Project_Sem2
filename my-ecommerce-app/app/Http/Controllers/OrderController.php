<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Cart;

class OrderController extends Controller
{
    // CREATE
    public function create()
{
    return view('orders.create', [
        'customers' => Customer::all(),
    ]);
}

public function store(Request $request)
{
    Order::create($request->only(['customer_id','employee', 'total_amount', 'status', 'payment']));

    return redirect()->route('orders.index')->with('status', 'Order created successfully');
}


    // READ

    public function index(Request $request)  
    {  
        $status = $request->input('status');
        $query = Order::with('customer');
    
        if ($status) {
            $query->where('status', $status);
        }
    
        $orders = $query->paginate(10);
    
        if ($request->ajax()) {  
            return response()->json($orders);  
        }  
    
        $totalCus = Customer::count();
        $totalPro = Product::count();
    
        $totalOrder = Order::whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->count(); 
        $complete = Order::where('status', 'Completed')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
    
        $cancel = Order::where('status', 'Cancelled')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        
        $process = Order::where('status', 'Processing')
        ->whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->count();
        return view('admin.orders.index', compact('orders', 'totalCus', 'totalOrder', 'totalPro', 'complete', 'cancel', 'process'));
    }
    


    // UPDATE
    public function edit($id)
{
    $order = Order::findOrFail($id);
    
    return view('orders.edit', [
        'order' => $order,
        'customers' => Customer::all(),
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
        
        if ($order) {  
            $order->orderDetails()->delete();
            $order->delete();  
            return response()->json(['message' => 'Order deleted successfully.']);  
        } else {  
            return response()->json(['message' => 'Order not found.'], 404);  
        }
    }
    

    //Show
    public function show($orderId)
    {
        $order = Order::with('orderDetails.product')
                        ->findOrFail($orderId);
                        $carts = Cart::all();

        return view('orders.show', compact('order', 'carts'));
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
