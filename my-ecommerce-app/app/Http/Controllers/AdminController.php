<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Employee;
use App\Models\Product;
use Carbon\Carbon;


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
        $totalCus = Customer::whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->count();
        $totalEm = Employee::whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->count();
        $totalPro = Product::whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->count();
        $totalOrder = Order::whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->count();
        $activeUsersCount = Customer::where('status', 'active')->count();  
        $activeUsers = Customer::where('status', 'active')->get();
        $startDate = Carbon::now()->subDays(10)->startOfDay(); 
        $endDate = Carbon::now()->endOfDay();

        $totalamount = Order::whereBetween('created_at', [$startDate, $endDate])
                            ->sum('total_amount');

        return view('admin.dashboard', [
            'customers' => $customers,
            'orders' => $orders,
            'totalCus' => $totalCus,
            'totalEm' => $totalEm,
            'totalPro' => $totalPro,
            'totalOrder' => $totalOrder,
            'activeUsersCount' => $activeUsersCount,
            'activeUsers' => $activeUsers,
            'totalamount' => $totalamount,
            'startDate' => $startDate,
            'endDate' => $endDate

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

    

}
