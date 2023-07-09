<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
        'published_at',
        'parent',
        'active',
        'home',
        'sort',
        'html_title',
        'keywords',
        'head'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = [
        'published' => 'boolean',
    ];

    public function scopePublished(Builder $query)
    {
        return $query->where('published', 1);
    }

}
