<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Edit Product
                    <a href="{{ route('products.index') }}" class="btn btn-primary float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->product_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="catalog_id" class="form-label">Category</label>
                        <select class="form-select" id="catalog_id" name="catalog_id" required>
                            @foreach ($catalogs as $catalog)
                            <option value="{{ $catalog->catalog_id }}" {{ $product->catalog_id == $catalog->catalog_id ? 'selected' : '' }}>{{ $catalog->catalog_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="file_path" class="form-label">Product Images</label>
                        <input type="file" class="form-control" id="file_path" name="file_path[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-danger">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
