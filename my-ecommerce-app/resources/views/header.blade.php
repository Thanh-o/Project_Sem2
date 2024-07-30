<header>  
  <div class="header">  
    <div class="logo">
          <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}">
          </a>        
    </div>
    <div class="header-2">
        <div class="menu">
            <i class="fa-solid fa-bars" style="margin-right: 5px;"></i> Menu
            <nav class="bar-menu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <a href="#">Products</a>
                        <div class="drop-category">
                            <a href="#">Laptop</a>
                            <a href="#">PC</a>
                            <a href="#">Phone</a>
                            <a href="#">Watch</a>
                            <a href="#">Game</a>
                        </div>
                    </li>
                    <li><a href="#">Promotions</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <div class="user-o">
                        <li><a href="{{ route('cart.index') }}">Cart</a></li>
                        <div class="account">
                            <li><a href="#">Account</a>
                                <div class="dropdown-content_2">
                                    <div class="hello">
                                        <i class="fa-regular fa-hand-point-right"></i>
                                        <div class="thing-name">Hello, do you have an account yet?</div>
                                    </div>  
                                    <div class="login-bottom">
                                        <a href="{{ route('customers.login') }}" class="login-box">Login</a>  
                                        <a href="{{ route('customers.signup') }}" class="signup-box">Sign Up</a> 
                                    </div>
                                </div> 
                            </li>
                        </div>
                    </div>
                </ul>
            </nav> 
        </div> 

        <nav class="navigation-bar">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    <a href="#">Products</a>
                    <div class="drop-category">
                        <a href="#">Laptop</a>
                        <a href="#">PC</a>
                        <a href="#">Phone</a>
                        <a href="#">Watch</a>
                        <a href="#">Game</a>
                    </div>
                </li>
                <li><a href="{{ route('about_us') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav> 
        <div class="search">  
            <input type="text" placeholder="Search for products...">  
            <button type="submit" class="fa-solid fa-magnifying-glass"></button>   
        </div>  
        <div class="user-options">  
            <div class="cart">  
                {{-- <a href="{{ route('cart.index') }}">   --}}
                    <i class="fa-solid fa-cart-shopping"></i>  
                    <span class="cart-count"></span>   
                {{-- </a>   --}}
            </div> 
            <div class="user-menu">  
                <a href="#" class="login"><i class="fa-solid fa-circle-user"></i></a>  
                <div class="dropdown-content">
                    <div class="hello">
                        <i class="fa-regular fa-hand-point-right"></i>
                        <div class="thing-name">Hello, do you have an account yet?</div>
                    </div>  
                    <div class="login-bottom">
                        <a href="{{ route('customers.login') }}" class="login-box">Login</a>  
                        <a href="{{ route('customers.signup') }}" class="signup-box">Sign Up</a> 
                    </div>
                </div> 
            </div>  
    
        </div> 

    </div>
  </div> 

</header>  
<link rel="stylesheet" href="{{ asset('Css/header.css') }}">
<script src="{{ asset('Js/header.js') }}"></script>
<div class="left-cart">
    {{-- <button class="esc-cart"><i class="fas fa-times"></i></button> --}}
    <div class="cart-header">
        
        <b><i class="fa-solid fa-cart-shopping"></i> Cart</b>
    </div>

  @if ($carts->isEmpty())
    <div class="empty-cart">
        <p>There are no products in your cart.</p>
        <a href="{{ route('home') }}"><b>Buy now</b></a>
    </div>
   @else

   <div id="cart-items" class="scroll">
    @foreach ($carts as $cart)
        <div class="cart-item" data-cart-id="{{ $cart->id }}">
            <div class="header-product">
                <form action="{{ route('cart.remove', $cart->id) }}" method="POST" class="form-remove">
                    @csrf
                    @method('DELETE')
                    <button class="remove-btn"><i class="fas fa-times"></i></button>
                </form>
                <!-- Product Image and Details -->
                <div class="pro-img">
                    @php
                        $firstImage = $cart->product->images->first();
                    @endphp
                    @if ($firstImage)
                        <img src="{{ asset('storage/' . $firstImage->file_path) }}" alt="Product Image" class="product-image">
                    @else
                        <span class="product-image-placeholder">N/A</span>
                    @endif
                </div>
                <div class="item">
                    <span class="product-name">{{ $cart->product->product_name }}</span><br>
                    <span class="price" data-price="{{ $cart->product->price }}">
                        ${{ (int)$cart->product->price }}
                    </span>
                </div>
            </div>

            <div class="header-qty">
                <div class="qty">
                    <button class="qty-left" data-action="decrease" data-product-id="{{ $cart->product_id }}">-</button>
                    <input type="number" class="quantity-input" name="quantity" value="{{ $cart->quantity }}" min="1" data-product-id="{{ $cart->product_id }}">
                    <button class="qty-right" data-action="increase" data-product-id="{{ $cart->product_id }}">+</button>
                </div>
            </div>

            <div class="header-item">
                <span class="unit-price">
                    ${{ (int)($cart->product->price * $cart->quantity) }}
                </span>
            </div>
        </div>
    @endforeach
   </div>

  @endif
   
    <div class="payment"><a href="{{ route('cart.index') }}">Checkout</a></div>

</div>
<script>
        let cart = document.querySelector('.left-cart');
let iconCart = document.querySelector('.user-options .cart');
let container = document.querySelector('body');
let close = document.querySelector('.esc-cart');
iconCart.addEventListener('click', () => {
    if (cart.style.display == 'none') {
        cart.style.display = 'block';
    } else {
        cart.style.display = 'none';
    }
});
close.addEventListener('click', () => {
    cart.style.right = '-45%';
    container.style.transform = 'translateX(0)';
});
</script>