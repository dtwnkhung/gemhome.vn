<?php

namespace App\Http\Controllers\Appuser\Auth;

use Auth;
use Password; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:appuser');
    }

    protected function guard()
    {
        return Auth::guard('appuser');
    }

    protected function broker()
    {
        return Password::broker('hocviens');
    }

    public function showResetForm(Request $request, $token = null) { 
        return view('appuser.auth.passwords.reset-password',[
            'title' => 'Reset Hoc Vien Password',
            'passwordUpdateRoute' => 'appuser.password.update',
            'token' => $request->token,
            'email' => $request->email,
        ]);
    }
    public function reset(Request $request)
    {         
        // Delete this line and add your own code.
        $request->validate($this->rules(), $this->validationErrorMessages());

        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($request, $response)
                    : $this->sendResetFailedResponse($request, $response);
    }
}
