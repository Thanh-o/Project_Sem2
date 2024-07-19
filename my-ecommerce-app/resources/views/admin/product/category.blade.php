<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <div>
        <div>
        <h1>Category</h1>
        <form action="{{ route('categories.add') }}" method="POST" style="display: inline;">
            @csrf
            @method('POST')
            <input type="number" name="cate_id">
            <input type="text" name="cate_name">
            <button type="submit">Add</button>
        </form>
        </div>
        <div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->cate_id }}</td>
                            <td><form action="{{ route('categories.edit', $category->cate_id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="text" name="cate_name" value="{{ $category->cate_name }}">
                                <button type="submit" onclick="return confirm('Are you sure you want to edit this category?')">Edit</button>
                            </form>
                            </td>
                            <td>
                                
                                <form action="{{ route('categories.delete', $category->cate_id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

{{-- <!DOCTYPE html>
<html>
<head>
    <title>Products in Category</title>
</head>
<body>
    <h1>Products in Category: {{ $category->cate_name }}</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->product_name }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
</body>
</html> --}}
