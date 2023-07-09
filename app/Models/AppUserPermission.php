<?php

namespace App\Models;

use App\Models\AppUser;

use Illuminate\Database\Eloquent\Model;

class AppUserPermission extends Model
{
    protected $guarded = [];  

    protected function getModel($model_name)
    {
        // $model_name = 'App\Model\User';
        return $model_name == $model_name::get();
    }
    protected $fillable = [
        'appuser_id', 'model_name', 'model_id', 'status', 'active_date', 'end_date', 'description',
    ];

    function appuser() 
    {
        return $this->belongsTo(AppUser::class, 'appuser_id');
    }

    function hasPermission($model_name, $model_id)
    {
        $model = $this->getModel($model_name); 
        return in_array($model_id, $model->pluck('id')->toArray());
    }
}
