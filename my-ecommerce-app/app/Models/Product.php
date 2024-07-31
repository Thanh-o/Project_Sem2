<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name', 'description', 'price', 'quantity', 'cate_id', 'created_at', 'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'cate_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id', 'product_id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'product_id');
    }

    public function carts()
    {
        return $this->hasMany(Image::class, 'product_id', 'product_id');
    }
}
