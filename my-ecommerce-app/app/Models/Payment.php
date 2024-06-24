<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    public $timestamps = false;

    protected $fillable = [
        'payment_type', 'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
