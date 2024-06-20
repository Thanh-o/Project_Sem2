<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Customer List</h1>
        <a class="btn btn-primary mb-3" href="{{ route('customers.create') }}">Create New Customer</a>
        <ul class="list-group">
            @foreach ($customers as $customer)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        {{ $customer->name }} - {{ $customer->email }}
                    </div>
                    <div>
                        <a href="{{ route('customers.edit', $customer->customer_id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                        <form action="{{ route('customers.delete', $customer->customer_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    
</body>
</html>
