<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;

class CartController extends Controller
{
    // Read
    public function index()
    {
        $carts = Cart::with('product')->get();
        $products = Product::all();

        return view('cart.index', compact('carts', 'products'));
    }

    // Add
    public function add($product_id, Request $request)
    {
        $product = Product::findOrFail($product_id);
    
        $quantity = $request->input('quantity', 1);
    
        $cart = Cart::where('product_id', $product_id)->first();
    
        if ($cart) {
            $cart->increment('quantity', $quantity);
        } else {
            Cart::create([
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
        }
    
        return redirect()->route('cart.index')->with('success', 'Product added to cart!!!');
    }


// Checkout
public function checkout(Request $request)
{
    $carts = Cart::all();

    $totalAmount = $carts->sum(function ($cart) {
        return $cart->product->price * $cart->quantity;
    });

    try {
        $order = new Order();
        $order->customer_id = $request->input('customer_id', 1); 
        $order->employee = 'Default Employee'; 
        $order->total_amount = $totalAmount;
        $order->status = 'processing'; 
        $order->payment = 'paycash'; 
        $order->save();
    
        foreach ($carts as $cart) {
            $order->orderDetails()->create([
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'total' => $cart->product->price * $cart->quantity,
            ]);
        }

        // Clear the cart
        Cart::truncate();

        return redirect()->route('admin.orders.index')->with('status', 'Order paid successfully!!!');
    } catch (\Exception $e) {
        return redirect()->route('admin.orders.index')->with('error', 'An error occurred while processing your order.');
    }
}

//Delete
public function delete($id)
{
    $cart = Cart::findOrFail($id);
    $cart->delete();

    return redirect()->back()->with('status', 'Cart deleted successfully');
}

//Update
public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:carts,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::findOrFail($validated['id']);
        $cart->quantity = $validated['quantity'];
        $cart->save();

        return response()->json(['success' => true, 'quantity' => $cart->quantity]);
    }

}
