<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link
    rel="icon"
    href="{{ asset('images/logo_2.png') }}"
    type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ asset('Css/home/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/style.css') }}" />
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
          crossorigin="anonymous" 
          referrerpolicy="no-referrer" />
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



    </style>
  
  </head>
  <body>
    <div class="frame">
       @include('header')

       <main>
        <div class="group-7">
          <div class="group-6">
            <img src="{{ asset('images/img/nh-giga-1.png') }}" alt="Image 1">
            <img src="{{ asset('images/img/image-26.svg') }}" alt="Image 2">
            <img  class="nh-giga" src="{{ asset('images/2.jpg ') }}" alt="Image 3">
            <img  class="nh-giga" src="{{ asset('images/3.jpg ') }}" alt="Image 4">
            <img  class="nh-giga" src="{{ asset('images/4.jpg ') }}" alt="Image 5">
          </div>
          <div class="left5"><i class="fa-solid fa-chevron-left"></i></div>
          <div class="right5"><i class="fa-solid fa-chevron-right"></i></div>
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
                <div class="time">
                  <div class="div-33">
                    <div class="text-wrapper-28">Days</div>
                    <div class="element-5" id="days">01</div>
                  </div>
                  <div class="div-34">
                    <div class="text-wrapper-29">Hours</div>
                    <div class="element-6" id="hours">15</div>
                  </div>
                  <div class="div-35">
                    <div class="text-wrapper-30">Minutes</div>
                    <div class="element-7" id="minutes">17</div>
                  </div>
                  <div class="div-36">
                    <div class="text-wrapper-31">Seconds</div>
                    <div class="element-6" id="seconds">55</div>
                  </div>
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
            <div class="sale">
              <div class="div-38">
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
              <div class="div-40">
                  <div class="text-wrapper-33">HAVIT HV-G92 Gamepad</div>
                  <div class="div-41">
                      <div class="text-wrapper-34">$120</div>
                      <div class="text-wrapper-35">$160</div>
                  </div>
                  <div class="start1">
                      <img class="img-6" src="{{ asset('images/img/five-star-2.svg') }}" />
                      <div class="text-wrapper-36">(88)</div>
                  </div>
              </div>
            </div>
            <div class="sale">
              <div class="div-38">
                  <div class="discount-percent">
                      <div class="text-wrapper-32">-35%</div>
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
                      <img class="g-x" src="{{ asset('images/img/ak-900-01-500x500-1-1.png') }}" />
                  </div>
              </div>
              <div class="div-40">
                  <div class="text-wrapper-33">AK-900 Wired Keyboard</div>
                  <div class="div-41">
                      <div class="text-wrapper-34">$960</div>
                      <div class="text-wrapper-35">$1106</div>
                  </div>
                  <div class="start1">
                      <img class="img-6" src="{{ asset('images/img/five-star-2.svg') }}" />
                      <div class="text-wrapper-36">(75)</div>
                  </div>
              </div>
            </div>
            <div class="sale">
              <div class="div-38">
                  <div class="discount-percent">
                      <div class="text-wrapper-32">-30%</div>
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
                      <img class="g-x" src="{{ asset('images/img/g27cq4-500x500-1.png') }}" />
                  </div>
              </div>
              <div class="div-40">
                  <div class="text-wrapper-33">IPS LCD Gaming Monitor</div>
                  <div class="div-41">
                      <div class="text-wrapper-34">$370</div>
                      <div class="text-wrapper-35">$400</div>
                  </div>
                  <div class="start1">
                      <img class="img-6" src="{{ asset('images/img/five-star-2.svg') }}" />
                      <div class="text-wrapper-36">(99)</div>
                  </div>
              </div>
            </div>
            <div class="sale">
              <div class="div-38">
                  <div class="discount-percent">
                      <div class="text-wrapper-32">-25%</div>
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
                      <img class="g-x" src="{{ asset('images/img/image-34.png') }}" />
                  </div>
              </div>
              <div class="div-40">
                  <div class="text-wrapper-33">S-Series Furuo Chair</div>
                  <div class="div-41">
                      <div class="text-wrapper-34">$375</div>
                      <div class="text-wrapper-35">$400</div>
                  </div>
                  <div class="start1">
                      <img class="img-6" src="{{ asset('images/img/five-star-2.svg') }}" />
                      <div class="text-wrapper-36">(99)</div>
                  </div>
              </div>
            </div>
            <div class="sale">
              <div class="div-38">
                  <div class="discount-percent">
                      <div class="text-wrapper-32">-25%</div>
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
                      <img class="g-x" src="{{ asset('images/img/image-35.png') }}" />
                  </div>
              </div>
              <div class="div-40">
                  <div class="text-wrapper-33">S-Series Furuo Chair WG206</div>
                  <div class="div-41">
                      <div class="text-wrapper-34">$375</div>
                      <div class="text-wrapper-35">$400</div>
                  </div>
                  <div class="start1">
                      <img class="img-6" src="{{ asset('images/img/five-star-2.svg') }}" />
                      <div class="text-wrapper-36">(99)</div>
                  </div>
              </div>
            </div>
            <div class="sale">
              <div class="div-38">
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
              <div class="div-40">
                  <div class="text-wrapper-33">HAVIT HV-G92 Gamepad</div>
                  <div class="div-41">
                      <div class="text-wrapper-34">$120</div>
                      <div class="text-wrapper-35">$160</div>
                  </div>
                  <div class="start1">
                      <img class="img-6" src="{{ asset('images/img/five-star-2.svg') }}" />
                      <div class="text-wrapper-36">(88)</div>
                  </div>
              </div>
            </div>

          </div>
          {{-- <div class="left"><i class="fa-solid fa-chevron-left"></i></div> --}}
          <div class="right"><i class="fa-solid fa-chevron-right"></i></div>
      
        </div>

        <a href="{{ route('products') }}" style="color: white;">
          <div class="div-wrapper-3">
          <div class="text-wrapper-38">View All Products
          </div>
          </div>
        </a>
        <div class="group-8"></div>
        <div class="overlap-2">
            <div class="component">
              <div class="overlap-3">
                <img class="image-2" src="{{ asset('images/img/image-30-2.png') }}" />
                <div class="text-wrapper-9">Custome<br />Build</div>
                <div class="text-wrapper-10">See All Products</div>
              </div>
            </div>
            <div class="builddiv">
                <div class="build">
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-1.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-1.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-6.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-7.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-8.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-9.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-9.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-1.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-1.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-1.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                </div>
                <div class="arrow-left"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="arrow-right"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
              
  
        </div>
            
        <div class="overlap-9">
            <div class="component">
              <div class="overlap-3">
                <img class="image-2" src="{{ asset('images/img/image-30-4.png') }}" />
                <div class="text-wrapper-9">Desktops</div>
                <div class="text-wrapper-10">See All Products</div>
              </div>
            </div>
              <div class="desktops-div">
                <div class="desktops">
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-33.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-31.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-32.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-31-1.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-31-1.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-32.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-31.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-32.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-31.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-31.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                </div>
                <div class="left2"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="right2"><i class="fa-solid fa-chevron-right"></i></div>
              </div>
        </div>

        <div class="overlap-10">
            <div class="component">
              <div class="overlap-3">
                <img class="image-2" src="{{ asset('images/img/image-30-5.png') }}" />
                <div class="text-wrapper-9">Gaming<br />Monitors</div>
                <div class="text-wrapper-10">See All Products</div>
              </div>
            </div>
            <div class="gaming">
                <div class="monitors">
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-2.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-3.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-4.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-5.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-10.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-4.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-5.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-10.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-3.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-10.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                </div>
                <div class="left3"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="right3"><i class="fa-solid fa-chevron-right"></i></div>
            </div>  
        </div>

        <div class="overlap-11">
            <div class="component">
              <div class="overlap-3">
                <img class="image-2" src="{{ asset('images/img/image-30-7.png') }}" />
                <div class="text-wrapper-9">Laptop</div>
                <div class="text-wrapper-10">See All Products</div>
              </div>
            </div>
            <div class="laptop-div">
                <div class="laptop">
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-11.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-12.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-13.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-14.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-15.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-11.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-12.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : PC GAMING HACOM SNIPER I5 V2</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-13.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-14.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                  <div class="div-1">
                    <img class="image" src="{{ asset('images/img/image-29-15.png') }}" />
                    <div class="rating">
                      <div class="group-4">
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1.svg') }}" /></div>
                        <div class="star"><img class="star-2" src="{{ asset('images/img/star-1-4.svg') }}" /></div>
                      </div>
                      <div class="text-wrapper-7">Reviews (4)</div>
                    </div>
                    <p class="div-7">EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...</p>
                    <p class="element">
                      <span class="span">$499.00<br /></span> <span class="text-wrapper-8">$499.00</span>
                    </p>
                  </div>
                </div>
                <div class="left4"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="right4"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
        </div>
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
        <div class="div-60">
          <div class="div-62">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/677098c103177afc049a4c19deee86d6d93d1309b799eded200bd42a363be375?"
              class="img-60"
            />
            <div class="div-63">FREE SHIPPING</div>
          </div>
          <div class="div-62">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ea34a180cf603caf397979f70d2f36a3429d4df4a4d0bab8b1f63dfcd56a18c?"
              class="img-60"
            />
            <div class="div-63">100% REFUND</div>
          </div>
          <div class="div-62">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/57895350835a349cd66959292c2d1b600fab821ee5dd3cdb973f88c897328cc8?"
              class="img-60"
            />
            <div class="div-63">SUPPORT 24/7</div>
          </div>
        </div>
       </main>



        <footer>
          @include('footer')
        </footer>
        
      </div>
    </div>
    <script src="{{ asset('Js/home/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </body>
</html>
