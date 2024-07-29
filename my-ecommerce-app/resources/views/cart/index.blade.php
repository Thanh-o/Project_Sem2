<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
    rel="icon"
    href="{{ asset('images/logo_2.png') }}"
    type="image/x-icon"
    /> 
    <link rel="stylesheet" href="{{ asset('Css/cart/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />
</head>
<body>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="frame">
        @include('header')
        <div class="main">
            <div class="left">
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
            
            
            
            </div>
            
            <div class="checkoutLayout">
                <div class="right">
                    <h1>CHECKOUT</h1>
                    <form action="{{ route('cart.checkout') }}" method="POST">
                        @csrf
                        <div class="form">
                            <div class="group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" name="phone" id="phoneNumber" required>
                            </div>
                            <div class="group">
                                <label for="deliveryAddress">Delivery Address</label>
                                <input type="text" name="delivery_address" id="deliveryAddress" required>
                            </div>
                            <div class="group">
                                <label for="deliveryMethod">Form Of Delivery</label>
                                <select name="delivery_method" id="deliveryMethod">
                                    <option value="">Choose...</option>
                                    <option value="standard">Standard Delivery</option>
                                    <option value="express">Express Delivery</option>
                                </select>
                            </div>
                            <div class="group">
                                <label for="method">Payment Method</label>
                                <select name="payment_method" id="method" required>
                                    <option value="">Choose...</option>
                                    <option value="paycash">Pay Cash</option>
                                    <option value="deposit">Deposit</option>
                                    <option value="installment">Installment</option>
                                </select>
                            </div>

                            <div class="group" id="installment-options" style="display: none;">
                                <label for="installment-period">Choose Installment Period</label>
                                <select name="installment-period" id="installment-period">
                                    <option value="">Choose...</option>
                                    <option value="1-month">3 Months</option>
                                    <option value="3-months">6 Months</option>
                                    <option value="6-months">12 Months</option>
                                </select>
                                <label for="deposit-amount">Choose Deposit Amount</label>
                                <select name="deposit-amount" id="deposit-amount">
                                    <option value="10%">10%</option>
                                    <option value="20%">20%</option>
                                    <option value="30%">30%</option>
                                </select>
                            </div>

                            <div class="group"  id="deposit-options" style="display: none">
                                <div class="group">
                                    <button type="button" id="bank-button">Select Bank</button>
                                    <input type="hidden" id="selected-bank" name="selected-bank">
                                    <div id="selected-bank-name" class="selected-bank-name">No bank selected</div>
                                </div>
                                <div class="group" style="margin-top: 10px">
                                    <label for="cardnumber">Card Number</label>
                                    <input type="text" id="cardnumber" name="cardnumber" placeholder="Enter card number" required>
                                </div>
                                <div class="group">
                                    <label for="cardexpiry">Expiry Date</label>
                                    <input type="text" id="cardexpiry" name="cardexpiry" placeholder="MM/YY" required>
                                </div>
                                <div class="group">
                                    <label for="cardcvc">CVC</label>
                                    <input type="text" id="cardcvc" name="cardcvc" placeholder="CVC" required>
                                </div>
                            </div>
                        </div>
                        <div class="return">
                            <div class="row">
                                <div>Total Quantity</div>
                                <div class="totalQuantity"></div>
                            </div>
                            <div class="row">
                                <div>Total Price</div>
                                <div class="totalPrice">$</div>
                            </div>
                        </div>
                        <button type="submit" class="buttonCheckout">Order</button>
                    </form>

                </div>
            </div>

            
        </div>
        <div id="bank-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Select Bank</h2>
                <ul id="bank-list">
                    <li data-bank="vietcombank">Vietcombank</li>
                    <li data-bank="techcombank">Techcombank</li>
                    <li data-bank="bidv">BIDV</li>
                    <li data-bank="vietinbank">Vietinbank</li>
                    <li data-bank="sacombank">Sacombank</li>
                    <li data-bank="acb">ACB</li>
                </ul>
            </div>
        </div>

        <h2 class="mt-5 mb-4" >Product List:</h2>

        <ul>
            @foreach ($products as $product)
                <li>
                    {{ $product->product_name }} - 
                    Giá: {{ $product->price }}
                    <form class="add-to-cart-form" data-product-id="{{ $product->product_id }}">
                        @csrf
                        <input type="number" name="quantity" value="1" min="1" step="1">
                        <button class="btn btn-danger btn-sm" type="submit">+</button>
                    </form>
                </li>
            @endforeach
        </ul>
        
        

                    
        @include('footer')
        <script src="{{ asset('Js/cart.js') }}"></script>
</body>
</html>

