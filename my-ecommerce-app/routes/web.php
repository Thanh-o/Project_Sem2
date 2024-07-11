<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\ProductController;

Route::get('products', [ProductController::class, 'indexp'])->name('products');

use App\Http\Controllers\CustomerController;

// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
// Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
// Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
// Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
// Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
// Route::delete('/customers/{id}', [CustomerController::class, 'delete'])->name('customers.delete');
Route::prefix('customers')->group(function () {
    Route::get('login', [CustomerController::class, 'showLoginForm'])->name('customers.login');
    Route::post('login', [CustomerController::class, 'login'])->name('customers.login.submit');
    Route::post('logout', [CustomerController::class, 'logout'])->name('customers.logout');

    Route::get('signup', [CustomerController::class, 'showSignupForm'])->name('customers.signup');
    Route::post('signup', [CustomerController::class, 'signup'])->name('customers.signup.submit');

    Route::middleware('customers')->group(function () {
        // Route::get('/', [CustomerController::class, 'dashboard'])->name('customers.dashboard');
    });
});

Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customers.dashboard');

use App\Http\Controllers\HomeController;

// Home route outside of the customer prefix
Route::get('/', [HomeController::class, 'index'])->name('home');


// Route::get('/', function () {
//     return view('home');
// })->name('home');

use App\Http\Controllers\EmployeeController;

// Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
// Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
// Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
// Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
// Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
// Route::delete('/employees/{id}', [EmployeeController::class, 'delete'])->name('employees.delete');


use App\Http\Controllers\OrderController;

// Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
//     Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
//     Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
//     Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
//     Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
//     Route::delete('/orders/{id}', [OrderController::class, 'delete'])->name('orders.delete');

use App\Http\Controllers\OrderDetailController;

Route::get('/orderdetails', [OrderDetailController::class, 'index'])->name('orderdetails.index');
Route::get('/orderdetails/create', [OrderDetailController::class, 'create'])->name('orderdetails.create');
Route::post('/orderdetails', [OrderDetailController::class, 'store'])->name('orderdetails.store');
Route::get('/orderdetails/{id}/edit', [OrderDetailController::class, 'edit'])->name('orderdetails.edit');
Route::put('/orderdetails/{id}', [OrderDetailController::class, 'update'])->name('orderdetails.update');
Route::delete('/orderdetails/{id}', [OrderDetailController::class, 'delete'])->name('orderdetails.delete');

// use App\Http\Controllers\AuthController;

// Route::get('/auth', [AuthController::class, 'showForm'])->name('auth.form');
// Route::post('/signin', [AuthController::class, 'signIn'])->name('signin');
// Route::post('/signup', [AuthController::class, 'signUp'])->name('signup');

// Route::get('home', function () {
//     return view('home');
// });

//Category
// Route::get('/categories', [ProductController::class, 'indexcate'])->name('categories.index');
// Route::post('/categories', [ProductController::class, 'addcate'])->name('categories.store');
// Route::put('/categories/{id}', [ProductController::class, 'editcate'])->name('categories.update');
// Route::delete('/categories/{id}', [ProductController::class, 'deletecate'])->name('categories.delete');


use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    // Admin Login
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    });
    // Order Management
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{id}', [OrderController::class, 'delete'])->name('orders.delete');
    // Customer Management
    Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{id}', [CustomerController::class, 'delete'])->name('customers.delete');
    // Product Management
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');
    Route::delete('/products/delete-image/{id}', [ProductController::class, 'deleteImage'])->name('products.deleteImage');
    //Employee Managent    
    Route::get('employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{id}', [EmployeeController::class, 'delete'])->name('employees.delete');
    //Category
    Route::get('/categories', [ProductController::class, 'indexcate'])->name('products.category');
    Route::post('/categories', [ProductController::class, 'addcate'])->name('categories.add');
    Route::delete('/categories/{id}', [ProductController::class, 'deletecate'])->name('categories.delete');
    Route::put('categories/{id}', [ProductController::class, 'editcate'])->name('categories.edit');
    //Orderdetail Management
    Route::get('/orderdetails', [OrderDetailController::class, 'index'])->name('orderdetails.index');
    Route::get('/orderdetails/create', [OrderDetailController::class, 'create'])->name('orderdetails.create');
    Route::post('/orderdetails', [OrderDetailController::class, 'store'])->name('orderdetails.store');
    Route::get('/orderdetails/{id}/edit', [OrderDetailController::class, 'edit'])->name('orderdetails.edit');
    Route::put('/orderdetails/{id}', [OrderDetailController::class, 'update'])->name('orderdetails.update');
    Route::delete('/orderdetails/{id}', [OrderDetailController::class, 'delete'])->name('orderdetails.delete');
});

//Cart
use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product_id}', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/update/{cart_item_id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{cart_item_id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');