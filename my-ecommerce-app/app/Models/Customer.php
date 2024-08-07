<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'phone', 'username', 'password', 'address', 'created_at', 'image', 'status'
    ];

    protected $hidden = [
        'password'
    ];


    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'customer_id');
    }
    public function carts()
    {
        return $this->hasMany(Image::class, 'customer_id', 'customer_id');
    }
}
