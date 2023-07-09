<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Category;
use App\Models\Tag;

class Post extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $fillable = [
        'title', 'slug', 'description', 'content', 'image', 'published_at'
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

    public function author()
    {
        return $this->belongsTo('user', 'user_id');
    }

    function categories() {
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }

    function tags() {
        return $this->belongsToMany(Tag::class, 'tag_post', 'post_id', 'tag_id');
    }

    public function hasCategory($categoryId) {
        return in_array($categoryId, $this->categories->pluck('id')->toArray());
    }

    public function hasTag($tagId) {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }
}
