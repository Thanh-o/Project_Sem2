<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>{{ $product->product_name }}</title>  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('Css/products/show.css') }}">

</head>  
<body>  
    @include('header')
    <main>
        <div class="product-detail">  
            <div class="product-gallery">  
                @foreach ($product->images as $index => $image)  
                    <img src="{{ asset('storage/' . $image->file_path) }}" alt="Product Image" data-index="{{ $index }}" class="carousel-image" style="{{ $index > 0 ? 'display: none;' : '' }}">  
                @endforeach  
                <div class="carousel-nav">  
                    <button id="prev">&lt;</button>  
                    <button id="next">&gt;</button>  
                </div>  
            </div>  
    
            <div class="product-info">  
                <div class="product-name">{{ $product->product_name }}</div>
                
                <div class="product-rating">  
                    <span class="stars">★★★★☆</span>  
                    <span class="rating-count">(542)</span>  
                </div>                
                <div class="product-user">99+ people trust the product.</div>
    
                <div class="product-price">  
                    <span class="current-price">${{ $product->price }}</span>  
                    <span class="old-price">$699.99</span>  
                </div>  
    
                <div class="product-quantity">
                    <strong>Quantity</strong> {{ $product->quantity }}
                </div>
    
                <div class="product-category">  
                    <strong>Category:</strong> {{ $product->category->cate_name }}  
                </div>  
    
                <button class="add-to-cart"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>  
                <div class="description">{{ $product->description }}</</div> 
                <p><b>Note: </b>Please read the instruction manual carefully before use</p>
            </div>

            <div class="a-box"></div>
    
        </div> 
    </main>
    @include('footer')

    <script>  
        document.addEventListener('DOMContentLoaded', function () {  
            const images = document.querySelectorAll('.carousel-image');  
            const prevButton = document.getElementById('prev');  
            const nextButton = document.getElementById('next');  
            let currentIndex = 0;  

            function showImage(index) {  
                images.forEach((img, i) => {  
                    img.style.display = i === index ? 'block' : 'none';  
                });  
            }  

            prevButton.addEventListener('click', () => {  
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;  
                showImage(currentIndex);  
            });  

            nextButton.addEventListener('click', () => {  
                currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;  
                showImage(currentIndex);  
            });  
        });  
    </script>  
</body>  
</html>