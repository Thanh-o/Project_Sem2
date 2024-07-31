<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('Css/products.css') }}">
</head>
<body>
    @include('header')
    <main>
        <div class="top">
            <p>1-16 of over 50,000 results for <b>"pc gaming"</b></p>
            <div class="sort">
                <select name="sort-by" id="sort-by">
                    <option value="">Featured</option>
                    <option value="">Price: Low to High</option>
                    <option value="">Price: High to Low</option>
                    <option value="">Newest Arrivals</option>
                </select>
            </div>
        </div>
        <div class="section">
            <div class="left">
                <div class="category">
                    <h3>Category</h3>
                    <p>laptop</p>
                    <p>pc</p>
                    <p>đòng hồ</p>
                    <p>phone</p>
                </div>
            </div>
            <div class="right">
                <div class="title">
                    <h2 class="list-title">Product List</h2>
                    <p>Read the specifications carefully to find the right product.</p>
                </div>
                <div class="product-list">
                    @foreach ($products as $product)
                    <div class="product-card">
                        <div class="product-image">
                            @if ($product->images->isNotEmpty())
                                <img src="
                                {{ asset('storage/' . $product->images->first()->file_path) }}" alt="Product Image">
                            @else
                                <img src="{{ asset('images/default-placeholder.png') }}" alt="No Image Available">
                            @endif
                        </div>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="{{ route('products.show', $product->product_id) }}">{{ $product->product_name }}</a>
                            </h2>
                            <div class="product-rating">
                                <span class="stars">★★★★☆</span>
                                <span class="rating-count">(542)</span>
                            </div>
                            <p class="product-info">1K+ bought in past month</p>
                            <div class="product-price">
                                <span class="current-price">{{ $product->price }}</span>
                                <span class="old-price">$699.99</span>
                            </div>
                            <p class="delivery-info">Delivery <strong>Wed, Aug 14</strong><br>Ships to Vietnam</p>
                            <button class="add-to-cart">Add to cart</button>
                        </div>
                    </div>
                    @endforeach
                    <div class="pagination"></div>
                </div>
                <div class="help-contact">
                    <h2>Do you need help?</h2>
                    <p>Please contact us to get help as soon as possible.</p>
                </div>
                <div class="img-orther">
                    <img src="{{ asset('images/Screenshot 2024-07-31 165828.png') }}" alt="">
                </div>
                <div class="view-orther">
                    <h2>Maybe you are interested!!!</h2>
                    <div class="product-view">
                        <div class="card">
                            <div class="img-top">
                                <img src="{{ asset('images/img/image-30-2.png') }}" alt="">
                            </div>
                            <div class="img-bottom">
                                <img src="{{ asset('images/img/image-33-3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card">
                            <div class="img-top">
                                <img src="{{ asset('images/img/image-30-2.png') }}" alt="">
                            </div>
                            <div class="img-bottom">
                                <img src="{{ asset('images/img/image-33-3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card">
                            <div class="img-top">
                                <img src="{{ asset('images/img/image-30-2.png') }}" alt="">
                            </div>
                            <div class="img-bottom">
                                <img src="{{ asset('images/img/image-33-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </main>

    {{-- <div class="container mt-5">
        @if (session('status'))
        <h5 class="alert alert-success">{{ session('status')}}</h5>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Product List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Media</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->category->cate_name ?? 'N/A' }}</td>
                            <td>
                                @php $firstMedia = $product->images->first(); @endphp
                                @if ($firstMedia)
                                    @if ($firstMedia->file_type == 'image')
                                        <img id="main-media-{{ $index }}" src="{{ asset('storage/' . $firstMedia->file_path) }}" width="50px" height="50px" alt="Product Image">
                                    @elseif ($firstMedia->file_type == 'video')
                                        <video id="main-media-{{ $index }}" width="50px" height="50px" controls>
                                            <source src="{{ asset('storage/' . $firstMedia->file_path) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                @else
                                    <p>No media available.</p>
                                @endif
                                @if ($product->images->count() > 1)
                                    <button id="view-all-button-{{ $index }}" class="btn btn-sm btn-secondary mt-2" onclick="toggleMedia({{ $index }})">More</button>
                                @endif
                                <div id="all-media-{{ $index }}" class="additional-media">
                                    @foreach ($product->images->slice(1) as $media)
                                        @if ($media->file_type == 'image')
                                            <img src="{{ asset('storage/' . $media->file_path) }}" width="50px" height="50px" alt="Product Image">
                                        @elseif ($media->file_type == 'video')
                                            <video width="50px" height="50px" controls>
                                                <source src="{{ asset('storage/' . $media->file_path) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                <a href="#">+</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
    @include('footer')
    {{-- <script>
        function toggleMedia(index) {
            var mainMedia = document.getElementById('main-media-' + index);
            var allMedia = document.getElementById('all-media-' + index);
            var viewAllButton = document.getElementById('view-all-button-' + index);

            if (allMedia.classList.contains('additional-media')) {
                allMedia.classList.remove('additional-media');
                viewAllButton.textContent = 'Close';
            } else {
                allMedia.classList.add('additional-media');
                viewAllButton.textContent = 'More';
            }
        }
    </script> --}}
</body>

</html>
