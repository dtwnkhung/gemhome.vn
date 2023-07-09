<?php
namespace App\Helpers\Cms;
 
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;
 
class Time {

    /**
     * @param string dateInput
     * @return string
     */
    public function setTimeAttribute($dateInput)
    {
        return  $this->attributes['time'] = Carbon::parse($dateInput, Auth::user()->timezone)
                    ->setTimezone('UTC')->format('D:M:YY');
    }
}