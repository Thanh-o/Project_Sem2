<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderDetailController extends Controller
{
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return view('orderdetails.index', compact('orderDetails'));
    }

    public function create()
    {
        return view('orderdetails.create');
    }

    public function store(Request $request)
    {
        $orderDetail = OrderDetail::create($request->all());
        return redirect()->route('orderdetails.index');
    }

    public function show($id)
    {
        $orderDetail = OrderDetail::find($id);
        return view('orderdetails.show', compact('orderDetail'));
    }

    public function edit($id)
    {
        $orderDetail = OrderDetail::find($id);
        return view('orderdetails.edit', compact('orderDetail'));
    }

    public function update(Request $request, $id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->update($request->all());
        return redirect()->route('orderdetails.index');
    }

    public function destroy($id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->delete();
        return redirect()->route('orderdetails.index');
    }
}


