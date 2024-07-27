<header>  
  <div class="header">  
      <div class="logo">
          <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}">
          </a>        
      </div>
    <div class="header-2">

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
                <li><a href="#">Promotions</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav> 
        <div class="search">  
            <input type="text" placeholder="Search for products...">  
            <button type="submit" class="fa-solid fa-magnifying-glass"></button>   
        </div>  
        <div class="user-options">  
            <div class="cart">  
                <a href="{{ route('cart.index') }}">  
                    <i class="fa-solid fa-cart-shopping"></i>  
                    <span class="cart-count">5</span>   
                </a>  
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
</header>  
<link rel="stylesheet" href="{{ asset('Css/header.css') }}">
<script src="{{ asset('Js/header.js') }}"></script>