<?php

namespace App\Http\Controllers\Appuser\Auth;

use App\Models\AppUser;
use App\Http\Controllers\Appuser\BaseAppuserController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends BaseAppuserController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/appuser/profile';

    
    protected function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:hoc_viens',
            'password' => 'required|confirmed|min:6',
        ]);

        AppUser::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        session()->flash('success', 'Đăng ký thành công');
        return redirect()->route('appuser.loginform');
    }
}
