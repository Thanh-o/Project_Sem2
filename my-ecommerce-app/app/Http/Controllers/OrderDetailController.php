<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    //Read
    public function index(){
        $orderdetails = OrderDetail::all();
        return view('orderdetails.index', compact('orderdetails'));
    }

    //Create
    public function create(){
        return view('orderdetails.create');
    }
    public function store(Request $request){
        Orderdetail::create($request->all());
        return redirect()->route('orderdetails.index')->with('status', 'OrderDetail created successfully');
    }

    //Edit
    public function edit(){
        return view('orderdetails.edit');
    }
    public function update(Request $request,$id){
        $orderdetail = OrderDetail::find($id);
        $orderdetail->update($request->all());
    }

    //Delete
    public function delete($id){
        $orderdetail = OrderDetail::find($id);
        $orderdetail->delete();
    }
}
