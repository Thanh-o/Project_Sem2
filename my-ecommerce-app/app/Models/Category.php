<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;

    protected $fillable = [
        'cate_id','cate_name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'cate_id', 'cate_id');
    }
}
