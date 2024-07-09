<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;

class EcommerceController extends Controller
{
    // Admin CRUD
    public function createAdmin(Request $request) {
        $admin = Admin::create($request->all());
        return response()->json($admin);
    }

    public function getAdmins() {
        return response()->json(Admin::all());
    }

    public function getAdmin($id) {
        return response()->json(Admin::find($id));
    }

    public function updateAdmin(Request $request, $id) {
        $admin = Admin::find($id);
        $admin->update($request->all());
        return response()->json($admin);
    }

    public function deleteAdmin($id) {
        Admin::destroy($id);
        return response()->json('Admin deleted');
    }

    // Employee CRUD
    public function createEmployee(Request $request) {
        $employee = Employee::create($request->all());
        return response()->json($employee);
    }

    public function getEmployees() {
        return response()->json(Employee::all());
    }

    public function getEmployee($id) {
        return response()->json(Employee::find($id));
    }

    public function updateEmployee(Request $request, $id) {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return response()->json($employee);
    }

    public function deleteEmployee($id) {
        Employee::destroy($id);
        return response()->json('Employee deleted');
    }

    // Customer CRUD
    public function createCustomer(Request $request) {
        $customer = Customer::create($request->all());
        return response()->json($customer);
    }

    public function getCustomers() {
        return response()->json(Customer::all());
    }

    public function getCustomer($id) {
        return response()->json(Customer::find($id));
    }

    public function updateCustomer(Request $request, $id) {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return response()->json($customer);
    }

    public function deleteCustomer($id) {
        Customer::destroy($id);
        return response()->json('Customer deleted');
    }

    // Order CRUD
    public function createOrder(Request $request) {
        $order = Order::create($request->all());
        return response()->json($order);
    }

    public function getOrders() {
        return response()->json(Order::all());
    }

    public function getOrder($id) {
        return response()->json(Order::find($id));
    }

    public function updateOrder(Request $request, $id) {
        $order = Order::find($id);
        $order->update($request->all());
        return response()->json($order);
    }

    public function deleteOrder($id) {
        Order::destroy($id);
        return response()->json('Order deleted');
    }

    // OrderDetail CRUD
    public function createOrderDetail(Request $request) {
        $orderDetail = OrderDetail::create($request->all());
        return response()->json($orderDetail);
    }

    public function getOrderDetails() {
        return response()->json(OrderDetail::all());
    }

    public function getOrderDetail($id) {
        return response()->json(OrderDetail::find($id));
    }

    public function updateOrderDetail(Request $request, $id) {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->update($request->all());
        return response()->json($orderDetail);
    }

    public function deleteOrderDetail($id) {
        OrderDetail::destroy($id);
        return response()->json('OrderDetail deleted');
    }

    // Category CRUD
    public function createCategory(Request $request) {
        $category = Category::create($request->all());
        return response()->json($category);
    }

    public function getCategories() {
        return response()->json(Category::all());
    }

    public function getCategory($id) {
        return response()->json(Category::find($id));
    }

    public function updateCategory(Request $request, $id) {
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json($category);
    }

    public function deleteCategory($id) {
        Category::destroy($id);
        return response()->json('Category deleted');
    }

    // Product CRUD
    public function createProduct(Request $request) {
        $product = Product::create($request->all());
        return response()->json($product);
    }

    public function getProducts() {
        return response()->json(Product::all());
    }

    public function getProduct($id) {
        return response()->json(Product::find($id));
    }

    public function updateProduct(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json($product);
    }

    public function deleteProduct($id) {
        Product::destroy($id);
        return response()->json('Product deleted');
    }

    // Image CRUD
    public function createImage(Request $request) {
        $image = Image::create($request->all());
        return response()->json($image);
    }

    public function getImages() {
        return response()->json(Image::all());
    }

    public function getImage($id) {
        return response()->json(Image::find($id));
    }

    public function updateImage(Request $request, $id) {
        $image = Image::find($id);
        $image->update($request->all());
        return response()->json($image);
    }

    public function deleteImage($id) {
        Image::destroy($id);
        return response()->json('Image deleted');
    }

    // Relationships
    public function getProductCategory($productId) {
        $product = Product::findOrFail($productId);
        $category = $product->category()->first();
        return response()->json($category);
    }


}
