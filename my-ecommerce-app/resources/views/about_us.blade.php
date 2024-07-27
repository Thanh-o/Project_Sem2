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
    <link rel="stylesheet" href="{{ asset('Css/home/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/styleguide.css') }}" />
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
                <p>With a commitment to quality and service, we pride ourselves on being one of the most trusted online shopping destinations. We always ensure that every product that reaches you has been thoroughly inspected.</p>
                <div class="founder"> 
                    "Customers are always the driving force for us to continuously improve and develop. We are committed to delivering the best technology products and perfect services to our customers."
                </div>
            </div>
            


          </div>
    </main>

    @include('footer')
</body>
</html>