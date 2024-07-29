<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        
        h1, h2, h3 {
            color: #333;
        }
        
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        h3 {
            font-size: 18px;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        
        div {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        p {
            margin: 5px 0;
        }
        
        p strong {
            color: #333;
        }
        


        .status-Cancelled {
            color: #000;
        }
        
        .status-Processing {
            color: #ffc107; 
        }
        
        .status-Completed {
    color: #28a745;
    display: inline-flex;
    align-items: center;
    position: relative;
}

.status-Completed::after {
    content: '✔'; 
    font-size: 18px;
    color: #28a745;
    margin-left: 8px; 
}

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        
        table th {
            background-color: #f2f2f2;
        }
        
        table td img {
            border-radius: 50%;
            vertical-align: middle;
        }
        
        a {
            color: #007bff;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button:hover {
            background-color: #c82333;
        }

        .action{
            display: flex;
            justify-content: space-around;
        }
        .action button{
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Order Details</h1>
    <div>
        <h2>Order #{{ $order->order_id }}</h2>
        <p><strong>Customer ID:</strong> {{ $order->customer_id }}</p>
        <p><strong>Employee:</strong> {{ $order->employee }}</p>
        <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
        <p><strong>Status:</strong> <span class="{{ 'status-' . $order->status }}">{{ ucfirst($order->status) }}</span></p>
        <p><strong>Payment Method:</strong> {{ $order->payment }}</p>
        <p><strong>Delivery Address:</strong> {{ $order->address }}</p>
        <p><strong>Phone:</strong> {{ $order->phone }}</p>
        <p><strong>Delivery Method:</strong> {{ $order->delivery }}</p>
    </div>

    <h3>Order Items</h3>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderDetails as $detail)
            <tr>
                <td>
                    @php
                        $firstImage = $detail->product->images->firstWhere('file_type', 'image');
                    @endphp
                    @if ($firstImage)
                        <img src="{{ asset('storage/' . $firstImage->file_path) }}" width="50px" height="50px" alt="Product Image">
                    @else
                        <span>N/A</span>
                    @endif
                    <a href="{{ route('admin.product.edit', $detail->product->product_id) }}" style="margin-left: 10px">{{ $detail->product->product_name }}</a>
                </td>
                <td>{{ $detail->quantity }}</td>
                <td>${{ number_format($detail->total, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="action">
        <form action="{{ route('order.cancel', $order->order_id) }}" method="POST" style="margin-top: 20px;">
            @csrf
            @method('PUT')
            <button type="submit">Cancel Order</button>
        </form>
        <form action="{{ route('order.complete', $order->order_id) }}" method="POST" style="margin-top: 20px;">
            @csrf
            @method('PUT')
            <button type="submit">Successful delivery</button>
        </form>
    </div>
</body>
</html>
