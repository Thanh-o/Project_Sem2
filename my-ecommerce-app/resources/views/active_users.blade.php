<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Active Users</title>  
</head>  
<body>  
    <h1>Active Users Count</h1>  
    <p>The number of active users is: <strong>{{ $activeUsersCount }}</strong></p>  
    
    <a href="{{ route('customers.dashboard') }}">Go to Dashboard</a>  
    <h1>Active Users</h1>  
    
    @if($activeUsers->isEmpty())  
        <p>No active users found.</p>  
    @else  
        <ul>  
            @foreach($activeUsers as $user)  
                <li>{{ $user->name }} - {{ $user->email }}</li>  
            @endforeach  
        </ul>  
    @endif  
    
    <a href="{{ route('home') }}">Go to Home</a> 
</body>  
</html>