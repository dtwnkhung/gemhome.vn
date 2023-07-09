<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\SiteOption;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $this->config_question_types = array(
            '0' => 'Question default',
            '1' => 'Question select',
            '2' => 'Question image chooser'
        );
        view()->share('config_question_types', $this->config_question_types); 
    }
}
