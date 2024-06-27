<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
</head>
<body>
    <a href="{{ route('admin.dashboard') }}">DashBoard</a>
    <div class="container">
        <h1 class="mt-5 mb-4">Customer List</h1>
        <a class="btn btn-primary mb-3" href="{{ route('customers.create') }}">Add New Customer</a>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Username</th>
                    <th>Address</th>
                </thead>
                <tbody>
                    @php $counter = 1; @endphp
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->username }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>
                            <a href="{{ route('customers.edit', $customer->customer_id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                        <form action="{{ route('customers.delete', $customer->customer_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                        </form>
                            </td>
                        </tr>
                        @php $counter++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
</body>
</html>
