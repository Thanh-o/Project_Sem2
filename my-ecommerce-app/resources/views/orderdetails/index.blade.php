<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
</head>
<body>
<a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <div class="container">
        <h1 class="mt-5 mb-4">Orders</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a class="btn btn-primary mb-3" href="{{ route('orders.create') }}">Add New Order</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order Detail ID</th>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderDetails as $orderdetail)
                    <tr>
                        <td>{{ $orderdetail->id }}</td>
                        <td>{{ $orderdetail->order_id }}</td>
                        <td>{{ $orderdetail->product->product_name }}</td>
                        <td>{{ $orderdetail->quantity }}</td>
                        <td>{{ $orderdetail->total }}</td>
                        <td>
                            <a href="{{ route('orderdetails.index', $orderdetail->order_id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('orderdetails.edit', $orderdetail->order_id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('orderdetails.delete', $orderdetail->order_id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>
</html>