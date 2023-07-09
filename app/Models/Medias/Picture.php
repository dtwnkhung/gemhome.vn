<?php

namespace App\Models\Medias;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';

    protected $fillable = [
        'album_id',
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
        return $this->belongsTo('App\Models\Medias\Album'::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
