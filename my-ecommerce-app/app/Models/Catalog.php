<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalog';
    protected $primaryKey = 'catalog_id';
    public $timestamps = false;

    protected $fillable = [
        'catalog_name', 'description'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'catalog_id', 'catalog_id');
    }
}
