<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function index(ExaminationType $type = null)
    {
        $data = [
            'item' => 'test'
        ];
        return data;
    }
}
