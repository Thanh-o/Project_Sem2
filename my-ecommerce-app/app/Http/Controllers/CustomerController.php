<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Employee;
use App\Models\OrderDetail;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;



class CustomerController extends Controller
{
        // READ
        public function index()
        {

            $customers = Customer::all();
            $totalCus = Customer::count();
            $totalEm = Employee::count();
            $totalPro = Product::count();
            $complete = Order::where('status', 'Completed')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
    
            $cancel = Order::where('status', 'Cancelled')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
            return view('admin.customers.index', compact('customers', 'complete','cancel', 'totalCus', 'totalEm', 'totalPro'));
        }
        
        public function cindex()
        {
            $customers = Customer::all();
            return view('customers.index', compact('customers'));
        }
        
        // CREATE
        public function create()
        {
            return view('customers.create');
        }
    
 
        
        public function store(Request $request)
        {
            
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:customers,email',
                'phone' => 'nullable|string|max:20',
                'username' => 'required|string|min:6|max:50|unique:customers,username',
                'password' => 'required|string|min:6',
                'address' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
        
            $data = $request->only(['name', 'email', 'phone', 'username', 'password', 'address']);
            
            
            $data['password'] = Hash::make($data['password']);
        
            
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $data['image'] = $imageName; 
            }
        
            
            Customer::create($data);
        
            
            if (Session::has('admin_logged_in') && Session::get('admin_logged_in') === true) {
                return redirect()->route('admin.customers.index')->with('status', 'Customer added successfully');
            } else {
                return redirect()->route('customers.index')->with('status', 'Customer added successfully');
            }
        }
        
    
        // UPDATE
        public function edit($id)
        {
            $customer = Customer::findOrFail($id);
            return view('customers.edit', compact('customer'));
        }
    
        public function update(Request $request, $id)
        {
            $customer = Customer::findOrFail($id);
    
            $data = $request->only(['name', 'email', 'phone', 'username', 'password', 'address']);
    
            if ($request->filled('password')) {
                $data['password'] = Hash::make($request->input('password'));
            }
    
            $customer->update($data);
    
            if (Session::has('admin_logged_in') && Session::get('admin_logged_in') === true) {
            
                return redirect()->route('admin.customers.index')->with('status', 'Customer updated successfully');
            } else {
                
                return redirect()->route('customers.index')->with('status', 'Customer updated successfully');
            }
        }
    
        // DELETE
        public function delete($id)
        {
            $customer = Customer::findOrFail($id);
            $customer->delete();
    
            return redirect()->back()->with('status', 'Customer deleted successfully');
        }
    
    // Show signup form
    public function showSignupForm()
    {
        $carts = Cart::all();
        return view('customers.signup', compact('carts'));
    }

    // Sign up
    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:customers,email',
            'username' => 'required|min:6|unique:customers,username',
            'password' => 'required|min:6|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        $data = $request->only(['email', 'username', 'password']);
        $data['password'] = Hash::make($data['password']);
        $data['status'] = 'active';
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName; 
        }
    
        Customer::create($data);
    
        return redirect()->route('customers.dashboard')->with('status', 'Customer signed up successfully');
    }
    

    // Show login form
    public function showLoginForm()
    {
        $carts = Cart::all();
        return view('customers.login', compact('carts'));
    }

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $customer = Customer::where('username', $request->username)->first();
    
        if ($customer && Hash::check($request->password, $customer->password)) {
            $customer->status = 'active';
            $customer->save();
    
            Session::put('customer_logged_in', true);
            Session::put('customer_id', $customer->customer_id);
    
            return redirect()->route('customers.dashboard');
        }
    
        return back()->withErrors(['message' => 'Invalid credentials.']);
    }
    
    
    

    public function showActiveUsers()  
    {  
        $activeUsersCount = Customer::where('status', 'active')->count();  
        $activeUsers = Customer::where('status', 'active')->get();

        return view('active_users', [
            'activeUsersCount' => $activeUsersCount,
            'activeUsers' => $activeUsers,

        ]);  
    }  



    // Logout
    public function logout()
    {
        $customerId = Session::get('customer_id');
    
        if ($customerId) {
            $customer = Customer::find($customerId);
            $customer->status = 'inactive';
            $customer->save();
        }
    
        Session::forget('customer_logged_in');
        Session::forget('customer_id');
    
        return redirect()->route('customers.login')->with('status', 'You have been logged out successfully.');
    }
    
    
    

    // Dashboard
    public function dashboard()
    {
        $customerId = Session::get('customer_id');
        $customer = Customer::find($customerId);
        $carts = Cart::all();
        $products = Product::all();

    
        return view('customers.dashboard', [
            'customer' => $customer,
            'carts' => $carts,
            'products' =>$products,
        ]);
    }
    
    
    
}
