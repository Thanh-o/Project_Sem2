<?php
// app/Http/Middleware/TrackCustomerActivity.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class TrackActiveUsers
{
    protected function trackActiveUsers()  
    {  
        $activeUsers = Session::get('active_users', []);  
        if (Session::has('customer_id')) {  
            // Người dùng đang đăng nhập, theo dõi họ  
            $activeUsers[Session::get('customer_id')] = true;  
        }  
        Session::put('active_users', $activeUsers);  
    }  
    
    // Gọi phương thức trackActiveUsers trong constructor của controller hoặc middleware  
    public function __construct()  
    {  
        $this->trackActiveUsers();  
    }
}
