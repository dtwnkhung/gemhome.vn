<?php

namespace App\Models;
use App\Models\AppUser;
use App\Models\Package;

use Illuminate\Database\Eloquent\Model;

class AppUserPackage extends Model
{
    protected $guard = 'appuser';
    
    protected $guarded = [];  

    protected $fillable = [
        'appuser_id', 'package_id', 'last_update', 'permission_names',
        'package_price', 'package_duration',
    ];

    function appuser() 
    { 
        return $this->belongsTo(AppUser::class);
    }

    function package() 
    { 
        return $this->belongsTo(Package::class);
    }
}
