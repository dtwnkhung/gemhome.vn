<?php

namespace App\Http\Controllers\Appuser\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Appuser\BaseAppuserController;

class LoginController extends BaseAppuserController
{
    use AuthenticatesUsers;

    protected $redirectTo = '/appuser/profile';
    const ALL_GUARD = [
        'appuser'
      ];

    public function guard()
    {
        return Auth::guard('appuser');
    }
    function login(Request $request) 
    {
      $this->middleware('guest:appuser');

      $dataLogin = $request->only(['email', 'password']);
      foreach (self::ALL_GUARD as $guard) {
        if (Auth::guard($guard)->attempt($dataLogin)) {
          session()->flash('success', __('auth.Login successful!'));
          return redirect($this->redirectTo);
        }
      }
      
      session()->flash('error', __('app.Login failed'));
      return redirect()->route('appuser.loginform');
    }

    public function showLoginForm()
    {
      $this->middleware('guest:appuser');
        return view('appuser.auth.login')
          ->with('title', 'Hoc Vien Login')
          ->with('loginRoute', 'appuser.login')
          ->with('forgotPasswordRoute', 'appuser.password.request');
    }

    public function registerForm()
    {
      $this->middleware('guest');
      return view('appuser.auth.register');
    }

    public function logout()
    {
      auth('appuser')->logout();
      return redirect()->route('appuser.loginform');
    }

}
