<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [     //Makes the fields fillable, in other words, allows the frontend to fulfill those fields, and not any others
        'name',
        'description',
        'deadline',
        'done'
    ];
}
