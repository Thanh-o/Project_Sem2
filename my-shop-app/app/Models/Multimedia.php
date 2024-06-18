<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;
    protected $table = 'multimedia';
    protected $primaryKey = 'mul_id';
    public $timestamps = false;

    protected $fillable = [
        'product_id', 'mul_url', 'mul_description'
    ];
}
