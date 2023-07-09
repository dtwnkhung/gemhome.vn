<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Upload;
Use Image;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $fileUpload = $request->get('image');
        $name = $request->get('name');
        $url = Image::make($fileUpload)->save(public_path('uploads/' . $name));

        return response()->json([
            "status" => 200,
            "message" => "Success",
            "data" => $url
        ]);
    }
    
    public function upload(Request $request)
    {
        $png_url = "thumb-".time().".png";
        $dir = '/' . 'uploads/';
        $path = public_path() . $dir . $png_url;

        Image::make(file_get_contents($request->base64_image))->save($path);

        return response()->json([
            "status" => 200,
            "message" => "Success",
            "data" => $dir . $png_url
        ]);
    }

    // public function upload(Request $request)
    // {
    //     $png_url = "thumb-".time().".png";
    //     $dir = '/' . 'uploads/';
    //     $path = public_path() . $dir . $png_url;

    //     Image::make(file_get_contents($request->base64_image))->save($path);

    //     return response()->json([
    //         "status" => 200,
    //         "message" => "Success",
    //         "data" => $dir . $png_url
    //     ]);
    // }
}
