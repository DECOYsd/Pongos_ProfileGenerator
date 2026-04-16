<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'age',
        'program',
        'email',
        'gender',
        'hobbies',
        'biography',
    ];

    protected $casts = [
        'hobbies' => 'array',
    ];
}
