<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'name',
        'email',
        'data',
    ];


    protected $casts = [
        'data' => 'json'
    ];
}
