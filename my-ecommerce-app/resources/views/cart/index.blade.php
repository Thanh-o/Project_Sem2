<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="{{ route('home') }}">Home</a>
    <div class="container">
        <h1 class="mt-5 mb-4">Sản phẩm trong giỏ hàng:</h1>
<ul>
    @foreach ($carts as $cart)
        <li>{{ $cart->product->product_name }} - Số lượng: {{ $cart->quantity }}</li>
    @endforeach
</ul>

<h2 class="mt-5 mb-4">Product List:</h2>
<ul>
    @foreach ($products as $product)
        <li>
            {{ $product->product_name }} - 
            Giá: {{ $product->price }} 
            <form action="{{ route('cart.add', $product->product_id) }}" method="POST">
                @csrf
                <input type="number" name="quantity" value="1" min="1" step="1">
                <button type="submit" class="btn btn-danger btn-sm">+</button>
            </form>
            
        </li>
    @endforeach
</ul>

    
    <a href="{{ route('cart.checkout') }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to add this order?')">Checkout</a>
    </div>
    
</body>
</html>
