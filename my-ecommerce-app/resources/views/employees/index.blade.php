<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-3">Employee List</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Create New Employee</a>
        <ul class="list-group">
            @foreach ($employees as $employee)
            <li class="list-group-item">
                {{ $employee->name }} - {{ $employee->email }}
                <div class="btn-group ms-2" role="group" aria-label="Employee Actions">
                    <a href="{{ route('employees.edit', $employee->employee_id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <form action="{{ route('employees.delete', $employee->employee_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    
</body>
</html>
