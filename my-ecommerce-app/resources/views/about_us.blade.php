<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link
    rel="icon"
    href="{{ asset('images/logo_2.png') }}"
    type="image/x-icon"
    />  
    <link rel="stylesheet" href="{{ asset('Css/about_us.css') }}" />
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
    @include('header')

    <main>
        <div class="about">
            <div class="author">
                
                <img class="screenshot" src="{{ asset('images/manh.png') }}" alt="Founder"/>
                <div class="info">
                    <h3>Mr. Vu Duc Manh</h3>
                    <p>FPTTECH Founder</p>
                </div>
            </div>
            <div class="about-text">
                <h1>Welcome to FPTTECH - Your Premier Technology Shopping Destination</h1>
                <p>At FPTTECH, we believe that online shopping should be a simple and enjoyable experience. Established since 2001, we have been providing high-quality products from reputable brands worldwide.</p>
                <p>Our team consists of experts with many years of experience in e-commerce. We are always ready to listen and support you throughout your shopping journey.</p>
                <p>Come and explore our unique collection and enjoy a wonderful shopping experience at.</p>
                <div class="founder"> 
                    "Customers are always the driving force for us to continuously improve and develop. We are committed to delivering the best technology products and perfect services to our customers."
                </div>
            </div>
          </div>
          <div class="about-img-2">
            <div class="bottom">
                <img src="{{ asset('images/about/tải xuống (1).webp') }}" alt="">
                <img src="{{ asset('images/about/tải xuống (2).webp') }}" alt="">
                <img src="{{ asset('images/about/tải xuống.webp') }}" alt="">
            </div>
          </div>

          <div class="about-img">
              <div class="div-1">
                <div class="slider-img">
                    <img src="{{ asset('images/about/5.jpg') }}" alt="Image 1">
                    <img src="{{ asset('images/about/6.jpg') }}" alt="Image 2">
                    <img src="{{ asset('images/about/7.jpg ') }}" alt="Image 3">
                    <img src="{{ asset('images/about/8.jpg ') }}" alt="Image 4">
                </div>
                <div class="chevron">
                    <div class="left"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="right"><i class="fa-solid fa-chevron-right"></i></div>
                </div>
              </div>
              <div class="bottom">
                <img src="{{ asset('images/about/4.jpg') }}" alt="Image 5">
              </div>
          </div>
        </div>

    </main>

    @include('footer')
    <script src="{{ asset('Js/about_us.js') }}"></script>
</body>
</html>