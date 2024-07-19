<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link
    rel="icon"
    href="{{ asset('images/Tan-ty.png') }}"
    type="image/x-icon"
    />
    <style>
            .frame .under-line-3 {
          width: 1440px;
          margin-top: -1px;
          background-image: url('{{ asset('images/img/line-1-6.svg') }}');
          position: relative;
          height: 1px;
          opacity: 0.5;
          background-size: cover;
          background-position: 50% 50%;
      }
    </style>
    <link rel="stylesheet" href="{{ asset('Css/cart/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/home/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/styleguide.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="frame">
        <div class="overlap-group">
            <div class="header">
              <div class="header-1">
                <div class="logo">
                  <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" width="200" class="img-logo">
                  </a>
                  
                </div>
                <div class="div-5">
                  <div class="div-wrapper">
                    <div class="text-wrapper-3"><a href="{{ route('home') }}">Home</a></div> 
                  </div>
                  <div class="div-wrapper">
                    <div class="text-wrapper-3"><a href="#">Contact</a></div>
                  </div>
                  <div class="div-wrapper">
                    <div class="text-wrapper-3"><a href="#">About</a></div>
                  </div>
                  <div class="div-wrapper">
                    <div class="text-wrapper-3"><a href="{{ route('customers.signup') }}">Sign Up</a></div>
                  </div>
                </div>
              </div>
              <div class="div-2">
                <div class="div-3">
                  <input type="search" name="search" id="search" placeholder=" ">
                  <label for="search" class="p">What are you looking for?</label>                                 
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
        </div>

        <div class="link-bre">
            <a href="{{ route('home') }}">Home</a>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <a href="{{ route('cart.index') }}">Cart</a>
        </div>

        <div class="contain">
            <div class="cart-header">
              <div class="header-product">PRODUCT</div>
              <div class="header-item">PRICE</div>
              <div class="header-qty">QTY</div>
              <div class="header-item">UNIT PRICE</div>
            </div>
          
            <div class="cart-item">
                <div class="header-product">
                    <button class="remove-btn"><i class="fas fa-times"></i></button>
                    <img src="{{ asset('images/1.jpg') }}" alt="Product Image">
                    <span class="product-name">Nike Airmax 270 react</span>
                </div>
                <div class="header-item"><span class="price">$998</span></div>
                <div class="header-qty">
                    <div class="qty">
                    <button class="qty-left">-</button>
                    <input type="number" value="1" min="0" >
                    <button class="qty-right">+</button>
                  </div>
                </div>
                <div class="header-item"><span class="unit-price">$499</span></div>   
            </div>
          
            <div class="cart-item">
                <div class="header-product">
                    <button class="remove-btn"><i class="fas fa-times"></i></button>
                    <img src="{{ asset('images/2911751d962f3c69643707eed585ad04.jpg') }}" alt="Product Image">
                    <span class="product-name">Nike Airmax 270 react</span>
                </div>
                <div class="header-item"><span class="price">$998</span></div>
                <div class="header-qty">
                    <div class="qty">
                    <button class="qty-left">-</button>
                    <input type="number" value="1" min="0">
                    <button class="qty-right">+</button>
                  </div>
                </div>
                <div class="header-item"><span class="unit-price">$499</span></div>   
            </div>
        </div>
          
        <div class="overlap-8">
          <footer class="footer">
            <div class="div-47">
              <div class="under-line-3"></div>
              <div class="frame-wrapper-14">
                <div class="div-48">
                  <img class="img-7" src="{{ asset('images/img/icon-copyright-2.svg') }}" />
                  <p class="copyright-rimel">Copyright Aptech 2024. All right reserved</p>
                </div>
              </div>
            </div>
            <div class="div-49">
              <div class="div-19">
                <div class="div-50">
                  <div class="div-51">
                    <div class="logo-2"><div class="text-wrapper-40">Exclusive</div></div>
                    <div class="text-wrapper-41">Subscribe</div>
                  </div>
                  <p class="text-wrapper-42">Get 10% off your first order</p>
                </div>
                <div class="send-mail">
                  <div class="text-wrapper-43"><input type="email" placeholder="Enter your email" /></div>
                  <img class="img" src="{{ asset('images/img/icon-send-3.svg') }}" />
                </div>
              </div>
              <div class="div-50">
                <div class="text-wrapper-44">Support</div>
                <div class="div-19">
                  <p class="element-bijoy-sarani">Số 8A, Tôn Thất Thuyết,Mỹ Đình,Nam Từ Liêm,Hà Nội</p>
                  <div class="text-wrapper-42">fptaptech@gmail.com</div>
                  <div class="text-wrapper-42">+1234-5678-9874</div>
                </div>
              </div>
              <div class="div-50">
                <div class="text-wrapper-44">Account</div>
                <div class="div-19">
                  <div class="text-wrapper-45">My Account</div>
                  <div class="text-wrapper-42">
                    <a href="{{ route('customers.login') }}" style="color: white; text-decoration: none;">Login</a> / 
                    <a href="{{ route('customers.signup') }}" style="color: white; text-decoration: none;">Register</a>
                    </div>
                  <div class="text-wrapper-42"><a href="{{ route('cart.index') }}" style="color: white;text-decoration: none;">Cart</a></div>
                  <div class="text-wrapper-42">Wishlist</div>
                  <div class="text-wrapper-42">Shop</div>
                </div>
              </div>
              <div class="div-50">
                <div class="text-wrapper-44">Quick Link</div>
                <div class="div-19">
                  <div class="text-wrapper-45">Privacy Policy</div>
                  <div class="text-wrapper-42">Terms Of Use</div>
                  <div class="text-wrapper-42">FAQ</div>
                  <div class="text-wrapper-42">Contact</div>
                </div>
              </div>
              <div class="div-50">
                <div class="div-51">
                  <div class="text-wrapper-44">T2M</div>
                  <div class="div-40">
                    <p class="save-with-app-new">
                      For a community of gamers <br />and all technology lovers
                      <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in Vietnam.
                    </p>
                  </div>
                </div>
                <div class="social">
                  <div class="text-wrapper-46">Social</div>
                  <img class="instagram-svgrepo" src="{{ asset('images/img/instagram-svgrepo-com-1.svg') }}" />
                  <img class="facebook-svgrepo-com" src="{{ asset('images/img/facebook-svgrepo-com-1.svg') }}" />
                  <div class="pinterest-svgrepo">
                    <div class="element-ec-c-cee"><img class="vector" src="{{ asset('images/img/vector-18.svg') }}" /></div>
                  </div>
                  <img class="logo-twitter-svgrepo" src="{{ asset('images/img/logo-twitter-svgrepo-com-1.svg') }}" />
                </div>
              </div>
            </div>
            {{-- <div class="Rectangle1Copy35" style="width: 100%; height: 100%; background: #F6F7F8"></div> --}}
          </footer>

        </div>
    </div>

    {{-- <a href="{{ route('home') }}">Home</a>
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
    </div> --}}
    <script src="{{ asset('Js/cart/script.js') }}"></script>
</body>
</html>
