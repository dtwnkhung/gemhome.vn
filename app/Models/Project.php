<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\ProjectCategory;

class Project extends Model
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
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'published_at',
        'active',
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

    function categories() {
        return $this->belongsToMany(ProjectCategory::class, 'category_project', 'project_id', 'project_category_id');
    }

    public function hasCategory($categoryId) {
        return in_array($categoryId, $this->categories->pluck('id')->toArray());
    }
}
