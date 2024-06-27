<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <a href="{{ route('admin.dashboard') }}">DashBoard</a>
    <div class="container">
        <h1 class="mt-4 mb-3">Employee List</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add New Employee</a>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Username</th>
                    <th>Hire Date</th>
                    <th>Job Title</th>
                </thead>
                <tbody>
                    @php $counter = 1; @endphp
                    @foreach ($employees as $employee)
                        <tr>
                        <td>{{ $counter }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->username }}</td>
                        <td>{{ $employee->hire_date }}</td>
                        <td>{{ $employee->job_title }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->employee_id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                    <form action="{{ route('employees.delete', $employee->employee_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
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
