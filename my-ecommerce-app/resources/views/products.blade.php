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
    <style>
        .additional-media {
            display: none;
        }
    </style>
</head>

<body>
    <a href="{{ route('home') }}">Home</a>
    <div class="container mt-5">
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
    </div>

    <script>
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
    </script>
</body>

</html>
