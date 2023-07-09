<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
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

    function projects ()
    {
        return $this->belongsToMany(Post::class, 'category_project', 'project_category_id', 'project_id');
    }
}
