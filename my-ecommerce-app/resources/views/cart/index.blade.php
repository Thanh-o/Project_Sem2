<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link
    rel="icon"
    href="{{ asset('images/Tan-ty.png') }}"
    type="image/x-icon"
    />   

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('Css/cart/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/home/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/styleguide.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="frame">
        @include('header')

        <div class="link-bre">
            <a href="{{ route('home') }}">Home</a>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <a href="#">Cart</a>
        </div>
       
        <div class="main">

            <div class="container">
                <div class="cart-header">
                    <div class="header-product">PRODUCT</div>
                    <div class="header-item">PRICE</div>
                    <div class="header-qty">QTY</div>
                    <div class="header-item">UNIT PRICE</div>
                </div>
                @foreach ($carts as $cart)
                <div class="cart-item" data-cart-id="{{ $cart->id }}">
                    <div class="header-product">
                        <form action="{{ route('cart.remove', $cart->id) }}" method="POST" class="form-remove">
                            @csrf
                            @method('DELETE')
                            <button class="remove-btn"><i class="fas fa-times"></i></button>
                        </form>
                        @php
                            $firstImage = $cart->product->images->first(); 
                        @endphp
                        @if ($firstImage)
                            <img src="{{ asset('storage/' . $firstImage->file_path) }}" alt="Product Image" class="product-image">
                        @else
                            <span class="product-image-placeholder">N/A</span>
                        @endif
                        <span class="product-name">{{ $cart->product->product_name }}</span>
                    </div>
                    <div class="header-item">
                        <span class="price" data-price="{{ $cart->product->price }}">${{ $cart->product->price }}</span>
                    </div>
                    <div class="header-qty">
                        <div class="qty">
                            <button class="qty-left" data-action="decrease" data-cart-id="{{ $cart->id }}">-</button>
                            <input type="number" class="quantity-input" name="quantity" value="{{ $cart->quantity }}" min="1" data-cart-id="{{ $cart->id }}">
                            <button class="qty-right" data-action="increase" data-cart-id="{{ $cart->id }}">+</button>
                        </div>
                    </div>
                
                    <script>
                        $(document).ready(function() {
                            $('.qty-left, .qty-right').on('click', function() {
                                var button = $(this);
                                var cartId = button.data('cart-id');
                                var input = $('input[name="quantity"][data-cart-id="' + cartId + '"]');
                                var currentQuantity = parseInt(input.val());
                                var newQuantity = button.data('action') === 'increase' ? currentQuantity + 1 : currentQuantity - 1;
                
                                if (newQuantity < 1) return; // Ensure quantity does not go below 1
                
                                updateCartQuantity(cartId, newQuantity);
                            });
                
                            $('input.quantity-input').on('change', function() {
                                var input = $(this);
                                var cartId = input.data('cart-id');
                                var newQuantity = parseInt(input.val());
                
                                if (newQuantity < 1) {
                                    input.val(1); // Reset to 1 if below 1
                                    newQuantity = 1;
                                }
                
                                updateCartQuantity(cartId, newQuantity);
                            });
                
                            function updateCartQuantity(cartId, quantity) {
                                $.ajax({
                                    url: '{{ route('update.cart') }}',
                                    type: 'POST',
                                    data: {
                                        cart_id: cartId,
                                        quantity: quantity,
                                        _token: $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(response) {
                                        if (response.success) {
                                            $('input[name="quantity"][data-cart-id="' + cartId + '"]').val(response.quantity);
                                        } else {
                                            alert('Failed to update quantity');
                                        }
                                    },
                                    error: function(xhr) {
                                        alert('An error occurred: ' + xhr.status + ' ' + xhr.statusText);
                                    }
                                });
                            }
                        });
                    </script>
                    <div class="header-item">
                        <span class="unit-price">${{ $cart->product->price * $cart->quantity }}</span>
                    </div>                
                </div>
                @endforeach
            </div>
            
        
        
          <div class="coupon_area">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Coupon</h3>
                        <div class="coupon_inner">   
                            <p>Enter your coupon code if you have one.</p>                                
                            <input placeholder="Coupon code" type="text">
                            <button type="submit">Apply coupon</button>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Cart Totals</h3>
                        <div class="coupon_inner">
                           <div class="cart_subtotal">
                               <p>Subtotal</p>
                               <p class="cart_amount">£215.00</p>
                           </div>
                           <div class="cart_subtotal ">
                               <p>Shipping</p>
                               <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                           </div>
                           <a href="#">Calculate shipping</a>

                           <div class="cart_subtotal">
                               <p>Total</p>
                               <p class="cart_amount">£215.00</p>
                           </div>
                           <div class="checkout_btn">
                               <a href="{{ route('cart.checkout') }}" onclick="return confirm('Are you sure you want to add this order?')">Proceed to Checkout</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>  
        </div>
        
        <h2 class="mt-5 mb-4" >Product List:</h2>
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
          
        @include('footer')
        {{-- <script src="{{ asset('Js/cart/script.js') }}"></script> --}}
</body>
</html>

