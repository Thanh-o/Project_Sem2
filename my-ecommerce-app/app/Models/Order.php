<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    public $timestamps = false;

    protected $fillable = [
        'customer_id','employee', 'total_amount', 'status', 'payment', 'created_at', 'updated_at'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    // public function employee()
    // {
    //     return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    // }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class,'order_id','order_id');
    }
 
}
