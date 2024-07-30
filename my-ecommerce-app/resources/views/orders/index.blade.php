<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="{{ route('admin.dashboard') }}">DashBoard</a>
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
                <th>ID</th>
                <th>Customer Name</th>
                <th>Employee Name</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Payment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $index => $order)
                <tr>
                    <td>{{ $index + 1 }}</td> 
                    <td>{{ optional($order->customer)->name ?? 'N/A' }}</td>
                    <td>N/A</td>
                    {{-- <td>{{ optional($order->employee)->name ?? 'N/A' }}</td> --}}
                    <td>{{ $order->total_amount }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->payment }}</td>
                    <td>
                        <a href="{{ route('order.show', $order->order_id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('orders.edit', $order->order_id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('orders.delete', $order->order_id) }}" method="POST" style="display: inline;">
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
