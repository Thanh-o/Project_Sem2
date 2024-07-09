<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;
    public $incrementing = false;
    
    protected $fillable = [
        'name', 'email', 'phone', 'username', 'password', 'hire_date', 'job_title'
    ];

    protected $hidden = [
        'password'
    ];


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
