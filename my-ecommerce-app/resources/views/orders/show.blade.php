<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('Css/order/show.css') }}">
</head>
<body>
    @include('header')

    <div class="order-detail">
        <div class="esc">
            <a href="{{ route('cart.index') }}"><i class="fas fa-times"></i></a>
        </div>
        <h1 class="header">Order Detail</h1>
        <div class="cus-info">
            <h2>Order #{{ $order->order_id }}</h2>
            <p><strong>Status:</strong> <span class="status {{ 'status-' . strtolower($order->status) }}">{{ ucfirst($order->status) }}</span></p>
            <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount) }}</p>
            <p><strong>Customer Name:</strong> {{ optional($order->customer)->name }}</p>
            <p><strong>Employee:</strong> {{ $order->employee }}</p>
            <p><strong>Delivery Address:</strong> {{ $order->address ?? optional($order->customer)->address }}</p>
            <p><strong>Phone:</strong> {{ $order->phone ?? optional($order->customer)->phone }}</p>
            <p><strong>Receiver Name:</strong>{{ $order->name ?? optional($order->customer)->name}}</p>
            <p><strong>Payment Method:</strong> {{ $order->payment }}</p>
            <p><strong>Delivery Method:</strong> {{ $order->delivery }}</p>
        </div>

        <h3>Order Items</h3>
        <div class="product-info">
            @foreach($order->orderDetails as $detail)
            <div class="product-item">
                @php
                    $firstImage = $detail->product->images->firstWhere('file_type', 'image');
                @endphp
                @if ($firstImage)
                    <img src="{{ asset('storage/' . $firstImage->file_path) }}" alt="Product Image">
                @else
                    <span>N/A</span>
                @endif
                <div class="product-details">
                    <div class="product-name"><a href="{{ route('products.show', $detail->product->product_id) }}">{{ $detail->product->product_name }}</a></div>
                    <div class="product-price">${{ number_format($detail->total) }}</div>
                </div>
                <div class="product-quantity">x{{ $detail->quantity }}</div>
            </div>
            @endforeach
            <div class="total-price">Total: ${{ number_format($order->orderDetails->sum('total')) }}</div>
        </div>

        <div class="action">
            @if ($order->status === 'Cancelled' || $order->status === 'Completed')
                <form action="{{ route('order.process', $order->order_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit">Checkout</button>
                </form>
            @else
                <form action="{{ route('order.cancel', $order->order_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="cancel-button">Cancel Order</button>
                </form>
                <form action="{{ route('order.complete', $order->order_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit">Successful delivery</button>
                </form>
            @endif
        </div>
    </div>
    @include('footer')
</body>
</html>
