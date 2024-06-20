<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Product List</h1>
        <a class="btn btn-primary mb-3" href="{{ route('products.create') }}">Create New Product</a>
        <ul class="list-group">
            @foreach ($products as $product)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $product->product_name }} - {{ $product->price }} - 
                {{ $product->catalog->catalog_name ?? 'N/A' }}
                <div class="btn-group">
                    <a href="{{ route('products.edit', $product->product_id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <form action="{{ route('products.delete', $product->product_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

   
</body>
</html>
