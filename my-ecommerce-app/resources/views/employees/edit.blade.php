<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Employee</h1>
        <a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
        <form action="{{ route('employees.update', $employee->employee_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}">
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $employee->username }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3">
                <label for="hire_date" class="form-label">Hire Date:</label>
                <input type="date" class="form-control" id="hire_date" name="hire_date" value="{{ $employee->hire_date }}">
            </div>

            <div class="mb-3">
                <label for="job_title" class="form-label">Job Title:</label>
                <input type="text" class="form-control" id="job_title" name="job_title" value="{{ $employee->job_title }}">
            </div>
            <button type="submit" class="btn btn-danger">Update</button>
        </form>
    </div>

    
</body>
</html>
