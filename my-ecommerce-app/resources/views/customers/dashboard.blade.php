<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('Css/home.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
</head>
<body>
    @include('customers.headerlog')
    <main>

        <!-- Slider-top -->
         <div class="top-web">
    
            <div class="div-1">
                <div class="slider-top">
                    <img src="{{ asset('images/img/nh-giga-1.png') }}" alt="Image 1">
                    <img src="{{ asset('images/img/image-26.svg') }}" alt="Image 2">
                    <img src="{{ asset('images/2.jpg ') }}" alt="Image 3">
                    <img src="{{ asset('images/3.jpg ') }}" alt="Image 4">
                    <img src="{{ asset('images/4.jpg ') }}" alt="Image 5">
                </div>
                <div class="chevron">
                    <div class="left5"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="right5"><i class="fa-solid fa-chevron-right"></i></div>
                </div>
            </div>
         </div>
    
        <!-- Category -->
        <div class="categories">
            <div class="header">
                <div class="icon"></div>
                <span class="title">Categories</span>
            </div>
            <div class="list">
                <div class="top">
                    <h1>Browse By Category</h1>
                    <div class="arrow">
                        <i class="fa-solid fa-arrow-left"></i>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                
                <div class="countdown">
                    <div class="cate-unit">
                        <img src="{{ asset('images/img/category-cellphone-3.svg') }}" />
                        <span class="label">Phone</span>
                        
                    </div>
                    
                    <div class="cate-unit">
                        <img class="category-computer" src="{{ asset('images/img/category-computer-3.svg') }}" />
                        <span class="label">Computer</span>
                        
                    </div>
                    
                    <div class="cate-unit">
                        <img  src="{{ asset('images/img/category-smartwatch-3.svg') }}" />
                        <span class="label">SmartWatch</span>
                        
                    </div>
                    
                    <div class="cate-unit">
                        <img  src="{{ asset('images/img/category-camera-3.svg') }}" />
                        <span class="label">Camera</span>
                        
                    </div>
    
                    <div class="cate-unit">
                        <img src="{{ asset('images/img/category-headphone-3.svg') }}" />
                        <span class="label">HeadPhone</span>
                        
                    </div>
    
                    <div class="cate-unit">
                        <img  src="{{ asset('images/img/category-gamepad-3.svg') }}" />
                        <span class="label">Gaming</span>
                        
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Flash Sale -->
        <div class="flash-sales">
            <div class="header">
                <div class="icon"></div>
                <span class="title">Today's</span>
            </div>
            <div class="sales-container">
                <h1>Flash Sales</h1>
                <div class="countdown">
                    <div class="time-unit">
                        <span class="label">Days</span>
                        <span class="number" id="days">01</span> 
                    </div>
                    <span class="separator">:</span>
                    <div class="time-unit">
                        <span class="label">Hours</span>
                        <span class="number" id="hours">15</span>
                    </div>
                    <span class="separator">:</span>
                    <div class="time-unit">
                        <span class="label">Minutes</span>
                        <span class="number" id="minutes">17</span>
                    </div>
                    <span class="separator">:</span>
                    <div class="time-unit">
                        <span class="label">Seconds</span>
                        <span class="number" id="seconds">55</span>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Product Sale -->
         <div class="div-2">
            <div class="sale">
                <div class="box">
                    <div class="top">
                        <div class="percent">
                            <b>- 40%</b>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-regular fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-img">
                        <img src="{{ asset('images/img/g92-2-500x500-1.png') }}" />
                    </div>
                    <div class="bottom">
                        <div class="name">HAVIT HV-G92 Gamepad</div>
                        <div class="price">
                            <p>$120</p>
                            <p class="cost">$160</p>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p class="number">(88)</p>
                        </div>
                    </div>
                </div>
                @foreach ($products as $product)
                <div class="box">
                    <div class="top">
                        <div class="percent">
                            <b>- 40%</b>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-regular fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-img">
                        @if ($product->images->isNotEmpty())
                        <img src="{{ asset('storage/' . $product->images->first()->file_path) }}" alt="Product Image">
                    @else
                        <img src="{{ asset('images/default-placeholder.png') }}" alt="No Image Available">
                    @endif
                    </div>
                    <div class="bottom">
                        <div class="name"><a href="{{ route('products.show', $product->product_id) }}" style="color: #000; text-decoration: none;">{{ $product->product_name }}</a>
                        </div>
                        <div class="price">
                            <p>${{ $product->price }}</p>
                            <p class="cost">$160</p>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p class="number">(88)</p>
                        </div>
                    </div>
                </div>
    
                @endforeach
    
    
            </div>
            <div class="chevron">
                <div class="left"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="right"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
    
         </div>
    
        <!-- View All -->
        <div class="view">
            <a href="{{ route('products') }}">
                <div class="box">
                    <p>View All Products</p>
                </div>
            </a>
        </div>        
    
        <!-- Product Prominent -->
         <div class="pro-list">
            <div class="cate">
                <div class="component">
                    <img src="{{ asset('images/img/image-30-2.png') }}" />
                    <b>Custom Build</b>
                    <a href="#">See All Products</a>
                </div>
                <div class="div-3">
                    <div class="product-list">
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>    
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                    </div>
                    <div class="chevron">
                        <div class="arrow-left"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="arrow-right"><i class="fa-solid fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
    
            <div class="cate">
                <div class="component">
                    <img src="{{ asset('images/img/image-30-2.png') }}" />
                    <b>Custom Build</b>
                    <a href="#">See All Products</a>
                </div>
                <div class="div-3">
                    <div class="product-list">
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>    
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                        <div class="product">
                            <img src="{{ asset('images/img/image-29-1.png') }}" />
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="number">Review (4)</p>
                            </div>
                            <div class="name">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On</div>
                            <p class="cost">$699</p>
                            <b>$499</b>
                        </div>  
                    </div>
                    <div class="chevron">
                        <div class="arrow-left"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="arrow-right"><i class="fa-solid fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
         </div>
    
         {{-- New Arrive --}}
         <div class="new-arrive">
            <div class="header">
                <div class="icon"></div>
                <span class="title">New Arrive</span>
            </div>
            <div class="featured">
                <div class="fea-1">
                    <img src="{{ asset('images/img/jbl-boombox-2-hero-020-x1-1-1.png') }}" />
                    <h4>Loudspeaker JBL Go 4</h4>
                    <h6>Enhance Your Music Experience.</h6>
                    <h5>Shop Now</h5>
                </div>
                <div class="fea-2">
                    <img src="{{ asset('images/img/ps5-slim-goedkope-playstation-large-1.png') }}" alt="">
                    <h4>PlayStation 5</h4>
                    <h6>Black and White version of the PS5 coming out on sale.</h6>
                    <h5>Shop Now</h5>
                </div> 
            </div>
         </div>
    
    
         <!-- Text -->
          <div class="text">
            <div class="text-5">
                <div class="text-1">‘’</div>
                <div class="text-2">
                    <p>Customer satisfaction is the driving force that helps FPTTECH continuously improve, bringing more and more
                        positive values ​​to the community.&nbsp;&nbsp;&nbsp;&nbsp;<br />Today&#39;s customers are future
                        teammates! Together we spread positive values ​​to the gaming community and all technology lovers in
                        Vietnam.&#34;</p>
                </div>
            </div>
            <div class="text-3">- Duc Manh</div>
            <div class="text-4">Leave Us A Review</div>
          </div>
    
          <!-- Service -->
           <div class="service">
            <div class="content">
                <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/677098c103177afc049a4c19deee86d6d93d1309b799eded200bd42a363be375?"
    
                />
                <b>FREE SHIPPING</b>
            </div>
            <div class="content">
                <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ea34a180cf603caf397979f70d2f36a3429d4df4a4d0bab8b1f63dfcd56a18c?"
    
                />
                <b>100% REFUND</b>
            </div>
            <div class="content">
                <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/57895350835a349cd66959292c2d1b600fab821ee5dd3cdb973f88c897328cc8?"
                />
                <b>SUPPORT 24/7</b>
            </div>
           </div>
    
      </main>
    
    <script src="{{ asset('Js/home.js') }}"></script>
</body>
</html>
