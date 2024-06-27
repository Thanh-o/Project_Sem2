<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
 </head>
<body>
        <div>
            <h2>Dashboard</h2>
            <a href="{{ route('employees.index') }}" >Employee Management</a><br>
            <a href="{{ route('customers.index') }}" >Customer Management</a><br>
            <a href="{{ route('orders.index') }}" >Order Management</a><br>
            <a href="{{ route('products.index') }}" >Product Management</a><br>
            <a href="{{ route('products.category') }}" >Category Management</a><br>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
</body>
</html>
