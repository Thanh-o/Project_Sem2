<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('Css/home/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/style.css') }}" />
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
      .frame .overlap-group-3 {
          position: relative;
          width: 511px;
          height: 511px;
          top: 89px;
          left: 29px;
          background-image: url('{{ asset('images/img/ps5-slim-goedkope-playstation-large-1.png') }}');
          background-size: 100% 100%;
      }
      .frame .under-line-2 {
          width: 81px;
          background-image: url('{{ asset('images/img/line-1-5.svg') }}');
          position: relative;
          height: 1px;
          opacity: 0.5;
          background-size: cover;
          background-position: 50% 50%;
      }
      .frame .under-line {
          position: relative;
          width: 48px;
          height: 1px;
          opacity: 0.5;
          background-image: url('{{ asset('images/img/line-1-3.svg') }}');
          background-size: cover;
          background-position: 50% 50%;
      }
      .frame .group-6 {
          position: absolute;
          width: 1398px;
          height: 328px;
          bottom: 450px;
          left: 63px;
          background-image: url('{{ asset('images/img/image-26.svg') }}');
          background-size: 100% 100%;
      }
  </style>
  
  </head>
  <body>
    <div class="frame">
      <div class="div">
        <div class="overlap">
          <p class="text-wrapper">Summer Sale And Free Express Delivery - OFF 50%!</p>
        </div>
        <div class="overlap-group">
          <div class="header">
            <div class="div-2">
              <div class="search-component-set">
              <div class="div-3">
                <p class="p">What are you looking for?</p>
                <img class="img" src="{{ asset('images/img/component-2-2.svg') }}" />
              </div>
              </div>
              <div class="div-4">
              <img class="img-2" src="{{ asset('images/img/wishlist-off.svg') }}" />
              <div class="img-2">
                <a href="{{ route('cart.index') }}">
                  <img class="cart" src="{{ asset('images/img/cart1-2.svg') }}" />
                </a>
              </div>
              <a href="{{ route('customers.login') }}"><img class="img-2" src="{{ asset('images/img/user-off.svg') }}" /></a>
              </div>
            </div>
            <div class="frame-wrapper">
            <div class="div-5">
              <div class="header-2">
                <div class="text-wrapper-2"><a href="{{ route('home') }}">Home</a></div>
                <div class="under-line"></div>
              </div>
              <div class="div-wrapper">
                <div class="text-wrapper-3">Contact</div>
              </div>
              <div class="header-3">
                <div class="text-wrapper-3">About</div>
              </div>
              <div class="header-4">
                <div class="text-wrapper-3"><a href="{{ route('customers.signup') }}">Sign Up</a></div>
              </div>
            </div>
            </div>
          </div>
          <div class="logo">
            <div class="exclusive">T2M</div>
          </div>
        </div>
          
        <img class="nh-giga" src="{{ asset('images/img/nh-giga-1.png') }}" />

          
        <div class="overlap-2">
            <div class="div-6">
              <img class="image" src="{{ asset('images/img/image-29-1.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
              <p class="element">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="component">
              <div class="overlap-3">
                <img class="image-2" src="{{ asset('images/img/image-30-2.png') }}" />
                <div class="text-wrapper-9">Custome<br />Builds</div>
                <div class="text-wrapper-10">See All Products</div>
              </div>
            </div>
            <div class="frame-wrapper-2">
              <div class="div-8">
                <div class="in-stock"></div>
                <img class="image" src="{{ asset('images/img/image-29-6.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
            <div class="frame-wrapper-3">
              <div class="div-8">
                <div class="in-stock"></div>
                <img class="image" src="{{ asset('images/img/image-29-7.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">EX DISPLAY : MINI C2 WHITE V2 (I5 12400F/GTX 1660 SUPER)</p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
            <div class="frame-wrapper-4">
              <div class="div-8">
                <div class="in-stock"></div>
                <img class="image" src="{{ asset('images/img/image-29-8.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">EX DISPLAY : ARES A6 (I3 1200F/H610/8G RAM/GTX 1650/550W)</p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
            <div class="frame-wrapper-5">
              <div class="div-8">
                <div class="in-stock"></div>
                <img class="image" src="{{ asset('images/img/image-29-9.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">EX DISPLAY : ARES A7 (I3 1200F/H610/8G RAM/GTX 1030/450W)</p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
        </div>
          
        <div class="div-9">
            <div class="div-10">
              <div class="div-11">
                <div class="div-12">
                  <div class="rectangle"></div>
                  <div class="text-wrapper-11">Categories</div>
                </div>
                <div class="text-wrapper-12">Browse By Category</div>
              </div>
              <div class="div-13">
                <div class="img-wrapper-2"><img class="img-3" src="{{ asset('images/img/icons-arrow-left-1.svg') }}" /></div>
                <div class="img-wrapper-2"><img class="img-3" src="{{ asset('images/img/icons-arrow-right-1.svg') }}" /></div>
              </div>
            </div>
            <div class="div-14">
              <div class="category-phone">
                <div class="text-wrapper-13">Phones</div>
                <img class="img-4" src="{{ asset('images/img/category-cellphone-3.svg') }}" />
              </div>
              <div class="category-phone">
                <div class="text-wrapper-14">Computers</div>
                <img class="category-computer" src="{{ asset('images/img/category-computer-3.svg') }}" />
              </div>
              <div class="category-phone">
                <div class="text-wrapper-15">SmartWatch</div>
                <img class="img-4" src="{{ asset('images/img/category-smartwatch-3.svg') }}" />
              </div>
              <div class="category-phone">
                <div class="text-wrapper-16">Camera</div>
                <img class="img-4" src="{{ asset('images/img/category-camera-3.svg') }}" />
              </div>
              <div class="category-phone">
                <div class="text-wrapper-15">HeadPhones</div>
                <img class="img-4" src="{{ asset('images/img/category-headphone-3.svg') }}" />
              </div>
              <div class="category-phone">
                <div class="text-wrapper-17">Gaming</div>
                <img class="img-4" src="{{ asset('images/img/category-gamepad-3.svg') }}" />
              </div>
            </div>
        </div>
          
        <div class="overlap-wrapper">
            <div class="overlap-3">
              <img class="image-2" src="{{ asset('images/img/image-30-4.png') }}" />
              <div class="text-wrapper-9">Desktops</div>
              <div class="text-wrapper-10">See All Products</div>
            </div>
        </div>
        <div class="overlap-group-wrapper">
            <div class="overlap-3">
              <img class="image-2" src="{{ asset('images/img/image-30-5.png') }}" />
              <div class="text-wrapper-9">Gaming<br />Monitors</div>
              <div class="text-wrapper-10">See All Products</div>
            </div>
        </div>
          
          
        <div class="overlap-4">
            <div class="div-21">
              <img class="image" src="{{ asset('images/img/image-29-2.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="text-wrapper-24">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
              <p class="element-2">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="div-22">
              <img class="image" src="{{ asset('images/img/image-29-3.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="EX-DISPLAY-viewsonic">EX DISPLAY : ViewSonic VA2215-H 22&#34; 100Hz FHD</p>
              <p class="element-3">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="div-23">
              <img class="image" src="{{ asset('images/img/image-29-4.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="div-7">EX DISPLAY : Gaorius Gacha Flex-024EU 5.6 MULTITOUCH All-In-On...</p>
              <p class="element">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="div-24">
              <img class="image" src="{{ asset('images/img/image-29-5.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="div-7">EX DISPLAY : LG S500TE i3 13100/8GB/256GB//Win11 (S500TE-313100037W)</p>
              <p class="element">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="frame-wrapper-7">
              <div class="div-8">
                <div class="in-stock"></div>
                <img class="image-3" src="{{ asset('images/img/image-29-10.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">EX DISPLAY : Pavilion TP01-4018d i3 13100/8GB/256GB (8X3R4PA)</p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
        </div>
          
        <div class="overlap-5">
            <div class="div-25">
              <img class="image-3" src="{{ asset('images/img/image-33.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
              <p class="element">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="div-26">
              <img class="image-3" src="{{ asset('images/img/image-30-6.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="div-7">EX DISPLAY : Gaorius Gacha Flex-024EU 5.6 MULTITOUCH All-In-On...</p>
              <p class="element">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="div-27">
              <img class="image-3" src="{{ asset('images/img/image-31.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="div-7">EX DISPLAY : MSI S500TE i3 13100/8GB/256GB//Win11 (S500TE-313100037W)</p>
              <p class="element">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="div-28">
              <img class="image" src="{{ asset('images/img/image-32.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="text-wrapper-25">EX DISPLAY : 4TechVP PC341 high speed ssd hard drive</p>
              <p class="element-4">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
            <div class="div-29">
              <img class="image" src="{{ asset('images/img/image-31-1.png') }}" />
              <div class="rating">
                <div class="group-4">
                  <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-71.svg') }}" /></div>
                  <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-74.svg') }}" /></div>
                  <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-75.svg') }}" /></div>
                </div>
                <div class="text-wrapper-7">Reviews (4)</div>
              </div>
              <p class="div-7">EX DISPLAY : Pavilion TP01-4018d i3 13100/8GB/256GB (8X3R4PA)</p>
              <p class="element">
                <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
              </p>
            </div>
        </div>
          
        <div class="div-30">
            <div class="frame-wrapper-8">
              <div class="div-31">
                <div class="div-32">
                  <div class="div-12">
                    <div class="rectangle-2"></div>
                    <div class="text-wrapper-26">Today’s</div>
                  </div>
                  <div class="text-wrapper-27">Flash Sales</div>
                </div>
                <div class="group-5">
                  <div class="div-33">
                    <div class="text-wrapper-28">Days</div>
                    <div class="element-5">01</div>
                  </div>
                  <div class="div-34">
                    <div class="text-wrapper-29">Hours</div>
                    <div class="element-6">15</div>
                  </div>
                  <div class="div-35">
                    <div class="text-wrapper-30">Minutes</div>
                    <div class="element-7">17</div>
                  </div>
                  <div class="div-36">
                    <div class="text-wrapper-31">Seconds</div>
                    <div class="element-6">55</div>
                  </div>
                  <div class="semiclone">
                    <div class="ellipse-2"></div>
                    <div class="ellipse-2"></div>
                  </div>
                  <div class="semiclone-2">
                    <div class="ellipse-2"></div>
                    <div class="ellipse-2"></div>
                  </div>
                  <div class="semiclone-3">
                    <div class="ellipse-2"></div>
                    <div class="ellipse-2"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="div-37">
              <div class="div-19">
                <div class="div-38">
                  <div class="overlap-group-4">
                    <div class="discount-percent">
                      <div class="text-wrapper-32">-40%</div>
                    </div>
                    <div class="div-39">
                      <div class="img-wrapper-3">
                        <img class="img-5" src="{{ asset('images/img/heart-small-4.svg') }}" />
                      </div>
                      <div class="img-wrapper-3">
                        <img class="img-5" src="{{ asset('images/img/quick-view-4.svg') }}" />
                      </div>
                    </div>
                    <div class="img-wrapper-4">
                      <img class="g-x" src="{{ asset('images/img/g92-2-500x500-1.png') }}" />
                    </div>
                  </div>
                </div>
                <div class="div-40">
                  <div class="text-wrapper-33">HAVIT HV-G92 Gamepad</div>
                  <div class="div-41">
                    <div class="text-wrapper-34">$120</div>
                    <div class="text-wrapper-35">$160</div>
                  </div>
                  <div class="div-13">
                    <img class="img-6" src="{{ asset('images/img/five-star-2.svg') }}" />
                    <div class="text-wrapper-36">(88)</div>
                  </div>
                </div>
              </div>
              <div class="div-19">
                <div class="div-38">
                  <div class="overlap-6">
                    <div class="discount-percent">
                      <div class="text-wrapper-32">-35%</div>
                    </div>
                    <div class="div-39">
                      <div class="img-wrapper-3">
                        <img class="img-5" src="{{ asset('images/img/heart-small-4.svg') }}" />
                      </div>
                      <div class="img-wrapper-3">
                        <img class="img-5" src="{{ asset('images/img/quick-view-1.svg') }}" />
                      </div>
                    </div>
                    <div class="ak-wrapper">
                      <img class="ak" src="{{ asset('images/img/ak-900-01-500x500-1-1.png') }}" />
                    </div>
                  </div>
                  
                </div>
                <div class="div-40">
                  <div class="text-wrapper-33">AK-900 Wired Keyboard</div>
                  <div class="div-41">
                    <div class="text-wrapper-34">$960</div>
                    <div class="text-wrapper-35">$1160</div>
                  </div>
                  <div class="div-13">
                    <img class="img-6" src="{{ asset('images/img/four-star-1.svg') }}" />
                    <div class="text-wrapper-36">(75)</div>
                  </div>
                </div>
              </div>
              <div class="div-19">
                <div class="div-38">
                  <div class="overlap-group-4">
                    <div class="discount-percent">
                      <div class="text-wrapper-32">-30%</div>
                    </div>
                    <div class="div-39">
                      <div class="img-wrapper-3">
                        <img class="img-5" src="{{ asset('images/img/heart-small-4.svg') }}" />
                      </div>
                      <div class="img-wrapper-3">
                        <img class="img-5" src="{{ asset('images/img/quick-view-7.svg') }}" />
                      </div>
                    </div>
                    <div class="img-wrapper-4">
                      <img class="gcq-x" src="{{ asset('images/img/g27cq4-500x500-1.png') }}" />
                    </div>
                  </div>
                </div>
                <div class="div-40">
                  <div class="text-wrapper-33">IPS LCD Gaming Monitor</div>
                  <div class="div-41">
                    <div class="text-wrapper-34">$370</div>
                    <div class="text-wrapper-35">$400</div>
                  </div>
                  <div class="div-13">
                    <img class="img-6" src="{{ asset('images/img/five-star-2.svg') }}" />
                    <div class="text-wrapper-36">(99)</div>
                  </div>
                </div>
              </div>
              <div class="div-42">
                <div class="div-43">
                  <div class="element-wrapper">
                    <div class="text-wrapper-32">-25%</div>
                  </div>
                  <div class="div-44">
                    <div class="img-wrapper-3">
                      <img class="img-5" src="{{ asset('images/img/heart-small-4.svg') }}" />
                    </div>
                    <div class="img-wrapper-3">
                      <img class="img-5" src="{{ asset('images/img/quick-view-4.svg') }}" />
                    </div>
                  </div>
                  <img class="image-4" src="{{ asset('images/img/image-34.png') }}" />
                </div>
                <div class="div-45">
                  <div class="text-wrapper-33">S-Series Furuo Chair</div>
                  <div class="div-41">
                    <div class="text-wrapper-34">$375</div>
                    <div class="text-wrapper-35">$400</div>
                  </div>
                  <div class="div-13">
                    <div class="four-half-star">
                      <img class="img-7" src="{{ asset('images/img/vector-8.svg') }}" />
                      <img class="img-7" src="{{ asset('images/img/vector-8.svg') }}" />
                      <img class="img-7" src="{{ asset('images/img/vector-8.svg') }}" />
                      <img class="img-7" src="{{ asset('images/img/vector-8.svg') }}" />
                      <img class="img-7" src="{{ asset('images/img/star-half-filled-2.svg') }}" />
                    </div>
                    <div class="text-wrapper-36">(99)</div>
                  </div>
                </div>
              </div>
              <div class="div-42">
                <div class="div-43">
                  <div class="element-wrapper">
                    <div class="text-wrapper-32">-25%</div>
                  </div>
                  <div class="div-44">
                    <div class="img-wrapper-3">
                      <img class="img-5" src="{{ asset('images/img/heart-small-4.svg') }}" />
                    </div>
                    <div class="img-wrapper-3">
                      <img class="img-5" src="{{ asset('images/img/quick-view-4.svg') }}" />
                    </div>
                  </div>
                  <img class="image-5" src="{{ asset('images/img/image-35.png') }}" />
                </div>
                <div class="div-45">
                  <div class="text-wrapper-33">S-Series WARRIOR WGC206 Chair</div>
                  <div class="div-41">
                    <div class="text-wrapper-34">$375</div>
                    <div class="text-wrapper-35">$400</div>
                  </div>
                  <div class="div-13">
                    <div class="four-half-star">
                      <img class="img-7" src="{{ asset('images/img/vector-8.svg') }}" />
                      <img class="img-7" src="{{ asset('images/img/vector-8.svg') }}" />
                      <img class="img-7" src="{{ asset('images/img/vector-8.svg') }}" />
                      <img class="img-7" src="{{ asset('images/img/vector-8.svg') }}" />
                      <img class="img-7" src="{{ asset('images/img/star-half-filled-3.svg') }}" />
                    </div>
                    <div class="text-wrapper-36">(99)</div>
                  </div>
                </div>
                
              </div>
            </div>
        </div>
        
        <div class="div-wrapper-3">
            <div class="text-wrapper-38"><a href="{{ route('products') }}" style="color: white;">View All Products</a>
            </div>
        </div>
        <img class="line" src="{{ asset('images/img/line-7.svg') }}" />
          
        <div class="component-2">
            <div class="overlap-3">
              <img class="image-2" src="{{ asset('images/img/image-30-7.png') }}" />
              <div class="text-wrapper-9"><br />Laptops</div>
              <div class="text-wrapper-10">See All Products</div>
            </div>
        </div>
          
        <div class="overlap-7">
            <div class="frame-wrapper-9">
              <div class="div-46">
                <div class="in-stock"></div>
                <img class="image-3" src="{{ asset('images/img/image-29-11.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-One...</p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
            <div class="frame-wrapper-10">
              <div class="div-46">
                <img class="image" src="{{ asset('images/img/image-29-12.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">
                  <span class="text-wrapper-39">EX DISPLAY :<br />Laptop gaming MSI GP68 HX 12VH 070VN</span>
                </p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
            <div class="frame-wrapper-11">
              <div class="div-46">
                <img class="image" src="{{ asset('images/img/image-29-13.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">EX DISPLAY : Gaorius Gacha Flex-024EU 5.6 MULTITOUCH All-In-One...</p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
            <div class="frame-wrapper-12">
              <div class="div-46">
                <div class="in-stock"></div>
                <img class="image" src="{{ asset('images/img/image-29-14.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">
                  EX DISPLAY :<br />
                  Laptop gaming MSI Pulse 17 AI C1VGKG 017VN
                </p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
            <div class="frame-wrapper-13">
              <div class="div-46">
                <div class="in-stock"></div>
                <img class="image" src="{{ asset('images/img/image-29-15.png') }}" />
                <div class="rating">
                  <div class="group-4">
                    <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                    <div class="star-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="img-wrapper"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-3"><img class="star-2" src="{{ asset('images/img/star-1-3.svg') }}" /></div>
                    <div class="star-4"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                  </div>
                  <div class="text-wrapper-7">Reviews (4)</div>
                </div>
                <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-One...</p>
                <p class="element">
                  <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                </p>
              </div>
            </div>
        </div>
        <div class="div-59">
            <img class="image-6" src="{{ asset('images/img/image-33-5.png') }}" />
            <img class="image-6" src="{{ asset('images/img/image-33-3.png') }}" />
            <img class="image-6" src="{{ asset('images/img/image-33-4.png') }}" />
            <img class="image-6" src="{{ asset('images/img/image-33-6.png') }}" />
            <img class="image-6" src="{{ asset('images/img/image-33-7.png') }}" />
            {{-- <div class="text-wrapper-73">Acer</div> --}}
        </div>  
        <div class="desktop">
            <div class="main">
              <div class="paginao">
                <div class="text-wrapper-47">1</div>
                <div class="text-wrapper-48">2</div>
                <div class="text-wrapper-49">3</div>
                <div class="text-wrapper-50">4</div>
                <div class="text-wrapper-51">5</div>
                <div class="text-wrapper-52">6</div>
                <div class="text-wrapper-53">7</div>
                <div class="text-wrapper-54">8</div>
                <div class="text-wrapper-55">&gt;</div>
                <div class="text-wrapper-56">&gt;&gt;</div>
              </div>
              <div class="products">
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/erick-cerritos-i5uv2hpitya-unsplash-1-1.png') }}" />
                  <p class="text-wrapper-60">Notebook Dell Inspiron 15 3000 <br />Intel Core i7 16GB</p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 440,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/c9321e4404c2099b50212fa9595e59c2-1.png') }}" />
                  <p class="text-wrapper-60">
                    Notebook Lenovo V15 Intel Core i5-1135G7, 8GB RAM, SSD 256GB, 15.6 Full HD, Windows 11 Pro, Preto -
                    82ME000EBR
                  </p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 360,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/ade0f509def937deea8cb1a8e7e44503-1.png') }}" />
                  <p class="text-wrapper-60">
                    Notebook Lenovo Thinkpad L14 <br />G1 AMD Ryzen 3 Pro 4450u, 8GB <br />RAM, SSD 256GB M.2, Tela 14
                    <br />Polegadas, LED, Freedos - 20u6s4ks00
                  </p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 260,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/7b6f6c1e1eb9186a4167fafb9f02312e-1.png') }}" />
                  <p class="text-wrapper-60">Macbook Air M1 8GB, 256GB SSD, <br />Tela 13.3&#34;, Gold, 2020 - MGND3LL/A</p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 550,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/17e8978cb6c3ddfc1a94cc1622ef5142-1.png') }}" />
                  <p class="text-wrapper-60">
                    Notebook Lenovo Ideapad 1i Celeron + Microsoft 365 Personal, 4GB, 128GB SSD, W11, 15.6 Polegadas,
                    82vx0001br, Prata
                  </p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 200,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/284bf64a5cf63ab792770437e41c13c3-1.png') }}" />
                  <p class="text-wrapper-60">
                    HP Notebook, Intel Core i3-7100U Processor 2.4 GHz, <br />8GB Memory, 2TB Hard Drive, Optical Drive, HD
                    Webcam, Backlit Keyboard, Windows 10 Home, Pale Mint
                  </p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 250,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/webfactory-ltd-b0tawaqubza-unsplash-1.png') }}" />
                  <p class="text-wrapper-60">
                    Notebook Asus Ryzen 5-3500U, <br />8GB RAM, SSD 256GB, 15,6&#39;, Radeon Vega 8, Linux, Cinza -
                    M515DA-BR1213
                  </p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 290,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/erick-cerritos-i5uv2hpitya-unsplash-1-1.png') }}" />
                  <p class="text-wrapper-60">Notebook Dell Inspiron 15 3000 <br />Intel Core i5 8GB</p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 320,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/c9321e4404c2099b50212fa9595e59c2-1.png') }}" />
                  <p class="text-wrapper-60">
                    Notebook Lenovo V15 Intel Core i5-1135G7, 8GB RAM, SSD 256GB, 15.6 Full HD, Windows 11 Pro, Preto -
                    82ME000EBR
                  </p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 360,00 sem juros</p>
                </div>
                <div class="div-58">
                  <img class="img-8" src="{{ asset('images/img/c9321e4404c2099b50212fa9595e59c2-1.png') }}" />
                  <p class="text-wrapper-60">
                    Notebook Lenovo V15 Intel Core i5-1135G7, 8GB RAM, SSD 256GB, 15.6 Full HD, Windows 11 Pro, Preto -
                    82ME000EBR
                  </p>
                  <div class="price-container">
                    <div class="text-wrapper-57">R$ 4.069,10</div>
                    <div class="text-wrapper-58">À vista</div>
                  </div>
                  <p class="text-wrapper-59">ou em até 10x de R$ 360,00 sem juros</p>
                </div>
              </div>
            </div>
            <div class="menu">
                <div class="text-wrapper-68">ALL</div>
                <div class="text-wrapper-68">CAMERA</div>
                <div class="text-wrapper-68">CONSOLE</div>
                <div class="text-wrapper-68">MONITOR</div>
                <div class="text-wrapper-68">NOTEBOOK</div>
            </div>
        </div>

        <div class="group">
            <div class="group-wrapper">
              <div class="group-2">
                <p class="customer">
                  Customer satisfaction is the driving force that helps T2M continuously improve, bringing more and more
                  positive values ​​to the community.&nbsp;&nbsp;&nbsp;&nbsp;<br />Today&#39;s customers are future
                  teammates! Together we spread positive values ​​to the gaming community and all technology lovers in
                  Vietnam.&#34;
                </p>
                <div class="text-wrapper-4">‘’</div>
                <div class="text-wrapper-5">- Duc Manh</div>
                <div class="group-3">
                  <div class="div-wrapper-2"><div class="text-wrapper-6">Leave Us A Review</div></div>
                </div>
              </div>
            </div>
        </div>
        <div class="heal">
            <div class="div-15">
              <div class="div-11">
                <div class="div-12">
                  <div class="rectangle"></div>
                  <div class="text-wrapper-11">Featured</div>
                </div>
                <div class="text-wrapper-12">New Arrival</div>
              </div>
              <div class="div-16">
                <div class="div-17">
                  <div class="overlap-group-2">
                    <img class="JBL-BOOMBOX-HERO" src="{{ asset('images/img/jbl-boombox-2-hero-020-x1-1-1.png') }}" />
                    <div class="text-wrapper-18">Loudspeaker JBL Go 4</div>
                    <div class="text-wrapper-19">Enhance Your Music Experience</div>
                  </div>
                  <div class="text-wrapper-20">Shop Now</div>
                </div>
                <div class="ellipse"></div>
              </div>
              <div class="frame-wrapper-6">
                <div class="overlap-group-wrapper-2">
                  <div class="overlap-group-3">
                      <div class="div-18">
                          <div class="div-19">
                            <div class="text-wrapper-21">PlayStation 5</div>
                            <p class="text-wrapper-22">Black and White version of the PS5 coming out on sale.</p>
                          </div>
                          <div class="div-20">
                            <div class="text-wrapper-23">Shop Now</div>
                            <div class="under-line-2"></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="group-6"></div>

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
                      <div class="div-50">
                        <div class="logo-2"><div class="text-wrapper-40">Exclusive</div></div>
                        <div class="text-wrapper-41">Subscribe</div>
                      </div>
                      <p class="text-wrapper-42">Get 10% off your first order</p>
                    </div>
                    <div class="send-mail">
                      <div class="text-wrapper-43">Enter your email</div>
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
                      <div class="text-wrapper-42">Login / Register</div>
                      <div class="text-wrapper-42">Cart</div>
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
                    <div class="div-50">
                      <div class="text-wrapper-44">T2M</div>
                      <div class="div-40">
                        <p class="save-with-app-new">
                          For a community of gamers <br />and all technology lovers
                          <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in Vietnam.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
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
           
          

      </div>
    </div>
  </body>
</html>
