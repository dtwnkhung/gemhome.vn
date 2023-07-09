<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteOption extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $fillable = [
        'name', 'type', 'desc', 'value', 'image'
    ];
}
