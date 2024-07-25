<div class="header">
  <div class="overlap-group">
    
      <div class="logo">
        <a href="{{ route('home') }}">
          <img src="{{ asset('images/logo.png') }}" class="img-logo">
        </a>
        
      </div>

    <div class="div-2">
      <div class="div-3">
        <input type="search" name="search" id="search" placeholder="What are you looking for? ">                           
        <button type="submit" class="fa-solid fa-magnifying-glass" ></button>                  
      </div>
      <div class="div-4">
        <div class="img-2">
          <a href="{{ route('cart.index') }}">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
        </div>
        <a href="{{ route('customers.login') }}"><i class="fa-solid fa-user"></i></a>
      </div>
    </div>
  </div>
  <div class="div-5">
    <div class="div-wrapper">
      <div class="text-wrapper-3"><a href="{{ route('home') }}">Home</a></div> 
    </div>
    <div class="div-wrapper">
      <div class="text-wrapper-3"><a href="#">Category</a></div>
    </div>
    <div class="div-wrapper">
      <div class="text-wrapper-3"><a href="{{ route('contact') }}">Contact</a></div>
    </div>
    <div class="div-wrapper">
      <div class="text-wrapper-3"><a href="#">About</a></div>
    </div>
    <div class="div-wrapper">
      <div class="text-wrapper-3"><a href="{{ route('customers.signup') }}">Sign Up</a></div>
    </div>
  </div>

</div> 
<link rel="stylesheet" href="{{ asset('Css/header.css') }}">