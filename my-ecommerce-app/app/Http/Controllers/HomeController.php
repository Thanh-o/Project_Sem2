<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'images'])->get();

        $carts = Cart::all();
        return view('home', [
            'products' => $products,
            'carts' => $carts
        ]);
    }

    public function contact()
    {
        $carts = Cart::all();
        return view('contact', compact('carts'));
    }

    public function about_us()
    {
        $carts = Cart::all();
        return view('about_us', compact('carts'));
    }
}
