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
</head>

<body>
    <div class="container mt-5">
        @if (session('status'))
        <h5 class="alert alert-success">{{ session('status')}}</h5>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Product List</h3>
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php $counter = 1; @endphp
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->catalog->catalog_name ?? 'N/A' }}</td>
                            
                            <td>
                                @if ($product->multimedia->isNotEmpty())
                                    @php $firstMedia = $product->multimedia->first(); @endphp
                                    @if ($firstMedia->file_type == 'image')
                                        <img id="main-media" src="{{ asset('storage/' . $firstMedia->file_path) }}" width="50px" height="50px" alt="Product Image">
                                    @elseif ($firstMedia->file_type == 'video')
                                        <video id="main-media" width="50px" height="50px" controls>
                                            <source src="{{ asset('storage/' . $firstMedia->file_path) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                            
                                    @if ($product->multimedia->count() > 1)
                                        <button id="view-all-button" class="btn btn-sm btn-secondary mt-2" onclick="toggleMedia()">View All</button>
                                    @endif
                                @else
                                    <p>No media available.</p>
                                @endif
                            
                                <div id="all-media" style="display: none;">
                                    @foreach ($product->multimedia as $media)
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
                            
                            <script>
                                function toggleMedia() {
                                    var mainMedia = document.getElementById('main-media');
                                    var allMedia = document.getElementById('all-media');
                                    var viewAllButton = document.getElementById('view-all-button');
                            
                                    if (allMedia.style.display === 'none') {
                                        allMedia.style.display = 'block';
                                        mainMedia.style.display = 'none';
                                        viewAllButton.textContent = 'Close';
                                    } else {
                                        allMedia.style.display = 'none';
                                        mainMedia.style.display = 'block';
                                        viewAllButton.textContent = 'View All';
                                    }
                                }
                            </script>
                            
        
                            <td>
                               <a href="{{ route('products.edit', $product->product_id) }}"
                                class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('products.delete', $product->product_id)}}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>  
                            </td>
                        </tr>
                        @php $counter++; @endphp
                        @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</body>

</html>
