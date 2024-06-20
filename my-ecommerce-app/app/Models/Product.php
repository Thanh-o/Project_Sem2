<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = false;

    protected $fillable = [
        'product_name', 'description', 'price', 'quantity', 'catalog_id'
    ];

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }

    public function multimedia()
    {
        return $this->hasOne(Multimedia::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
