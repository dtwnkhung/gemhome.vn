<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_1',
        'image',
        'link',
        'order'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
