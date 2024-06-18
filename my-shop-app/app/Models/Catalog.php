<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $table = 'catalog';
    protected $primaryKey = 'cata_id';
    public $timestamps = false;

    protected $fillable = [
        'category'
    ];
}
