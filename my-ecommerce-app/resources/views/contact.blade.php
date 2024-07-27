<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link
    rel="icon"
    href="{{ asset('images/logo_2.png') }}"
    type="image/x-icon"
    />  
    <link rel="stylesheet" href="{{ asset('Css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('Css/home/styleguide.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="frame">
        @include('header')

        <div class="link-bre">
            <a href="{{ route('home') }}">Home</a>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <a href="#">Contact</a>
        </div>

        <div class="main">
            <div class="contact-container">
            
                <div class="contact-form">
                    <div class="contact-form-header">
                        <h1><strong>Contact</strong></h1>
                    </div>
                    <form id="contact-form" method="POST" action="assets/mail.php">
                        <div class="form-group">
                            <input name="name" placeholder="Name *" type="text" required>
                        </div>
                        <div class="form-group">
                            <input name="email" placeholder="Email *" type="email" required>
                        </div>
                        <div class="form-group">
                            <input name="address" placeholder="Address *" type="text" required>
                        </div>
                        <div class="form-group">
                            <input name="phone" placeholder="Phone *" type="text" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Message *" class="form-control2" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            
                <div class="contact-info">
                    
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a3d66dd371cc9d8487efa4f49e6d410e151677d1cb213f8dd5523ec91592d04a?apiKey=64aa3cae170b4ef3aa6e5828ccea4ef8&width=800" alt="Image 1" class="contact-img">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e3fdcf606d587d3d7737736fd835333087e73f124831283b694864e9dd015cb?apiKey=64aa3cae170b4ef3aa6e5828ccea4ef8&width=800" alt="Image 2" class="contact-img">
                    
                    <div class="contact-info-header">
                        <h3><strong>Let's talk with us</strong></h3>
                    </div>

                    <p>Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p>
                    <ul class="contact-details">
                        <li><i class="fa fa-fax"></i> Address: 8a Ton That Thuyet Street, Tu Liem District, Hanoi City</li>
                        <li><i class="fa-solid fa-envelope"></i> t2mtechnology@.com</li>
                        <li><i class="fa fa-phone"></i> 0(1234) 567 890</li>
                    </ul>
                    <h3><strong>Working Hours</strong></h3>
                    <p><strong>Monday – Saturday</strong>: 08AM – 22PM</p>
                </div>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.506069949462!2d105.7797218!3d21.0288201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab00954decbf%3A0xdb4ee23b49ad50c8!2sFPT+Aptech+H%C3%A0+N%E1%BB%99i+-+H%E1%BB%87+th%E1%BB%91ng+%C4%91%C3%A0o+t%E1%BA%A1o+l%E1%BA%ADp+tr%C3%ACnh+vi%C3%AAn+qu%E1%BB%91c+t%E1%BA%BF!5e0!3m2!1svi!2s!4v1689303566947!5m2!1svi!2s" width="100%" height="450" style="border:0" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        
               
          
        @include('footer')

</body>
</html>

