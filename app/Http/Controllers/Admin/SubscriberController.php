<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function send_message(Request $request) {
        // dd($request->all());
        $email = $request['email'];
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        $subscriber = Subscriber::where('email', $email)
                        ->first();
        if ($validator->fails()) {
            return new JsonResponse([
                'success' => true,
                'message' => $validator->errors()
            ], 200);
        }
        if (is_null($subscriber)) {
            $subscriber = Subscriber::create([
                    'email' => $email,
                    'name' => $request->name,
                    'message' => $request->message,
                ]
            );
        } else {
            $subscriber->update([
                'email' => $email,
                'name' => $request->name,
                'message' => $request->message,
            ]);
        } 

        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => __('app.Thank you for subscribing to our email.')
                ], 
                200
            );
        }

    } 
    
}
