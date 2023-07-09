<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_1',
        'image',
        'contenthtml',
        'name',
        'order'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
