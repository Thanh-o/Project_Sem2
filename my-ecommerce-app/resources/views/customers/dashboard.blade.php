<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to your Dashboard</h1>
        <form action="{{ route('customers.logout') }}" method="POST">
            @csrf 
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
