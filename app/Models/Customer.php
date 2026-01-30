<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Add this to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password'
    ];

    // Optional: Hide password when converting to array/JSON
    protected $hidden = [
        'password',
    ];
}
