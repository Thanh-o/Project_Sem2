<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth; 

class CartController extends Controller
{
    public function index()
    {   
        if (!Auth::check()) {
            return redirect()->route('customers.login');
        }
        $customerId = Auth::id(); 
        $carts = Cart::where('customer_id', $customerId)->with('product')->get();
        $products = Product::all();

        return view('cart.index', compact('carts', 'products'));
    }

    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $customerId = Auth::id(); 

        $product = Product::find($product_id);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Sản phẩm không tồn tại'], 404);
        }

        $cartItem = Cart::where('product_id', $product_id)
                         ->where('customer_id', $customerId)
                         ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            $cartItem = new Cart();
            $cartItem->product_id = $product_id;
            $cartItem->quantity = $quantity;
            $cartItem->customer_id = $customerId;
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

    public function getCartItems()
    {
        $customerId = Auth::id(); 
        $cartItems = Cart::where('customer_id', $customerId)->with('product.images')->get();

        return response()->json([
            'success' => true,
            'cartItems' => $cartItems
        ]);
    }

    // Thanh toán
    public function checkout(Request $request)
    {
        $customerId = Auth::id();
        $carts = Cart::where('customer_id', $customerId)->get();

        $totalAmount = $carts->sum(function ($cart) {
            return $cart->product->price * $cart->quantity;
        });

        try {
            $order = new Order();
            $order->customer_id = $customerId; 
            $order->employee = 'Waiting';
            $order->total_amount = $totalAmount;
            $order->status = 'Processing';
            $order->payment = $request->input('payment_method');
            $order->address = $request->input('delivery_address');
            $order->delivery = $request->input('delivery_method');
            $order->phone = $request->input('phone_number');
            $order->name = $request->input('name');
            $order->save();

            foreach ($carts as $cart) {
                $order->orderDetails()->create([
                    'product_id' => $cart->product_id,
                    'quantity' => $cart->quantity,
                    'total' => $cart->product->price * $cart->quantity,
                ]);
            }

            Cart::where('customer_id', $customerId)->delete();

            return redirect()->route('order.show', ['order' => $order->order_id])->with('status', 'Order paid successfully!');
        } catch (\Exception $e) {
            return redirect()->route('order.show', ['order' => $order->order_id])->with('error', 'An error occurred while processing your order.');
        }
    }

    public function remove(Request $request, $id)
    {
        $customerId = Auth::id();
        $cartItem = Cart::where('id', $id)->where('customer_id', $customerId)->firstOrFail();

        $cartItem->delete();

        return response()->json([
            'success' => true,
            'message' => 'The product has been removed from the cart.',
        ]);
    }

    public function update(Request $request, $productId)
    {
        $customerId = Auth::id(); 
        $cart = Cart::where('product_id', $productId)->where('customer_id', $customerId)->first();

        if ($cart) {
            $cart->quantity = $request->input('quantity');
            $cart->save();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

    public function calculateTotals(Request $request)
    {
        $customerId = Auth::id(); 
        $cartItems = Cart::where('customer_id', $customerId)->get();

        $totalQuantity = 0;
        $totalPrice = 0;

        foreach ($cartItems as $cart) {
            $product = $cart->product;

            if ($product) {
                $quantity = $cart->quantity;
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
