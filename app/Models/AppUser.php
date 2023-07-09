<?php

namespace App\Models;

use App\Models\HocvienPermission;
use App\Models\Package;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Carbon\Carbon; 

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

use Illuminate\Database\Eloquent\SoftDeletes;
class AppUser extends Authenticatable
{
    use HasRoles, HasApiTokens, Notifiable;
    use SoftDeletes;
    public $table = "app_users";

    protected $guard = 'appuser';
    
    protected $guarded = [];  

    protected $fillable = [
        'name', 'email', 'password', 'username',
        'phone', 'email', 'address', 'date_of_birth',
        'email_verified_at', 'description',
        'image', 'balance', 'status',
        'facebook',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ]; 

    function permissions() 
    {
        return $this->hasMany(HocvienPermission::class, 'hocvien_id', 'id');
    }

    public function accounts()
    {
        return $this->hasMany('App\Models\SocialAccount');
    }

    function packages() 
    {
        return $this->belongsToMany(Package::class, 'hocvien_packages', 'hocvien_id');
    }

    function hasPackage($packageId)
    { 
        return in_array($packageId, $this->packages->pluck('id')->toArray());
    }

    function get_category_permission($model_name, $model_id)
    {
        return $model_name::where('id', $model_id)->first();
    }

    public static function check_permission($model_name = 'App\Models\Examinationmode', $mode = null, $user = null) {
        if (auth()->check()) return true;
        if ($mode && $mode->slug == 'mien-phi') return true;  
        if ($user) { 
            $per = HocvienPermission::where([
                ['hocvien_id', '=', $user->id],
                ['model_name', '=', $model_name],
                ['model_id', '=', $mode->id],
            ])->first();
            if (is_null($per)) return false;

            $now = Carbon::now();
            if ($per->end_date > $now)
                return true;

            return false;
        }
        return false;
    }
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }
    public function routeNotificationForMail($notification)
    { 
        return $this->email;
    }
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $url = route('appuser.password.reset', [
            'token' => $token,
            'email' => $this->getEmailForPasswordReset()
        ]);
        $this->notify(new ResetPasswordNotification($token));
    }
}
