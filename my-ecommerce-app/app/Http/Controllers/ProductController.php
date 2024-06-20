<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // CREATE
    public function create()
    {
        return view('products.create');
        
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->catalog_id = $request->input('catalog_id');
        $product->save();

        return redirect()->route('products.index')->with('status', 'Product created successfully');
    }

    // READ
    public function index()
    {
        $products = Product::with('catalog')->get();
        return view('products.index', compact('products'));
    }

    // UPDATE
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->catalog_id = $request->input('catalog_id');
        $product->save();

        return redirect()->route('products.index');
    }

    // DELETE
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('status', 'Product deleted successfully');
    }
}
