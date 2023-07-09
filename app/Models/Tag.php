<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    function posts() {
        return $this->belongsToMany(Post::class, 'tag_post', 'post_id', 'tag_id');
    }
}
