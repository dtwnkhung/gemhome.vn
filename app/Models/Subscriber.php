<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'email',
        'name',
        'message',
        'phone',
        'address',
        'subject',
    ];

    protected $guarded = [];
}
