<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Employee;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && $request->password === $admin->password) {
            Session::put('admin_logged_in', true);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    // Admin
    public function index()
    {
        $customers = $this->getNewCustomers();
        $orders = $this->getNewOrders();
        $totalOrders = Order::count();
        $totalCus = Customer::count();
        $totalEm = Employee::count();

        return view('admin.dashboard', [
            'customers' => $customers,
            'orders' => $orders,
            'totalOrders' => $totalOrders,
            'totalCus' => $totalCus,
            'totalEm' => $totalEm,
        ]);
    }

    protected function getNewCustomers()
    {
        return Customer::latest()->take(5)->get();
    }

    protected function getNewOrders()
    {
        return Order::latest('updated_at')->take(7)->get();
    }


    // public function dashboard()
    // {
    //     $indexData = $this->index();
    //     $customersData = $this->newcus();
    //     $ordersData = $this->neworder();

    //     return view('admin.dashboard', [
    //         'indexData' => $indexData,
    //         'customersData' => $customersData,
    //         'ordersData' => $ordersData,
    //     ]);
    // }
}
