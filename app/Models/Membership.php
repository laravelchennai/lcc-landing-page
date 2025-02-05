<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'name',
        'email',
        'data',
        'status'
    ];


    protected $casts = [
        'data' => 'json',
        'data.technologies' => 'array'
    ];
}
