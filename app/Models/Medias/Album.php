<?php

namespace App\Models\Medias;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = [
        'slug',
        'description',
        'title',
        'image',
        'metatitle',
        'headerhtml',
        'contenthtml',
        'footerhtml',
        'content',
        'order',
    ];

    /**
     * use App\Models\Album;
     * Get the album that owns the picture.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    /**
     * use App\Models\Picture;
     * Get all the pictures for the album.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures()
    {
        return $this->hasMany('App\Models\Medias\Picture'::class)->latest();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
