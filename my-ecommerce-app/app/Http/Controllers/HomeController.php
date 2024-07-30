<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return view('home', compact('carts'));
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
