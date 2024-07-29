<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Exception;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


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

// public function addToCart(Request $request)
// {
//     $data = $request->json()->all();

//     $request->validate([
//         'product_id' => 'required|exists:products,product_id',
//         'quantity' => 'required|integer|min:1'
//     ]);

//     $product = Product::findOrFail($data['product_id']);


//     $cartItem = Cart::where('product_id', $product->product_id)->first();
//     if ($cartItem) {
 
//         $cartItem->quantity += $data['quantity'];
//         $cartItem->save();
//     } else {
  
//         $cartItem = Cart::create([
//             'product_id' => $data['product_id'],
//             'quantity' => $data['quantity']
//         ]);
//     }

  
//     $cartItem->load('product'); 
    
//     return response()->json([
//         'success' => true,
//         'cartItem' => $cartItem,
//     ], 200);
// }

public function addToCart(Request $request)
{
    $product_id = $request->input('product_id');
    $quantity = $request->input('quantity');

    $product = Product::find($product_id);
    if (!$product) {
        return response()->json(['success' => false, 'message' => 'Product not found'], 404);
    }

    $cartItem = Cart::where('product_id', $product_id)->first();
    if ($cartItem) {
        $cartItem->quantity += $quantity;
        $cartItem->save();
    } else {
        $cartItem = new Cart();
        $cartItem->product_id = $product_id;
        $cartItem->quantity = $quantity;
        $cartItem->save();
    }

    return response()->json([
        'success' => true,
        'cartItem' => [
            'id' => $cartItem->id,
            'product' => $product,
            'quantity' => $cartItem->quantity
        ]
    ]);
}

// Method to get all cart items
public function getCartItems()
{
    $cartItems = Cart::with('product.images')->get();

    return response()->json([
        'success' => true,
        'cartItems' => $cartItems
    ]);
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
        $order->payment = $request->input('payment_method');
        $order->address = $request->input('delivery_address');
        $order->delivery = $request->input('delivery_method', 'standard');
        $order->phone = $request->input('phone_number');
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
public function remove(Request $request, $id)
{
    
    $cartItem = Cart::findOrFail($id);

    
    $cartItem->delete();

    
    return response()->json([
        'success' => true,
        'message' => 'Sản phẩm đã được xóa khỏi giỏ hàng.',
    ]);
}

//Update
public function update(Request $request, $productId)
{
    $cart = Cart::where('product_id', $productId)->first();
    if ($cart) {
        $cart->quantity = $request->quantity;
        $cart->save();
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 404);
}

public function calculateTotals(Request $request)
{
    $cartItems = $request->input('cart', []);

    $totalQuantity = 0;
    $totalPrice = 0;

    foreach ($cartItems as $item) {
        $product = Product::find($item['product_id']);

        if ($product) {
            $quantity = $item['quantity'];
            $price = $product->price;

            $totalQuantity += $quantity;
            $totalPrice += $quantity * $price;
        }
    }

    return response()->json([
        'totalQuantity' => $totalQuantity,
        'totalPrice' => $totalPrice,
    ]);
}
}
