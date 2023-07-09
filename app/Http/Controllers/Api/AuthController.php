<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\User;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;


use DB;
use Validator;

class AuthController extends Controller
{
    private $secretKey = 'Personal Access Token';
    private $successStatus = ['api_status' =>1 ,'code' => 200,];
    private $wrongHTTP = ['api_status'=>0,'code'=>400,
    'message'=>'Your HTTP method is not correct'];
    private $wrongUser = ['api_status'=>0,'code'=>400,
        'message'=>'Your email or password is not correct'];    

    public function signup(Request $request)
    {
     if($request->isMethod('post'))
     {$validator = Validator::make($request->all(), [ 
                        'name' => 'required', 
                        'email' => 'required|email', 
                        'password' => 'required|confirmed',
                        ]);
      if ($validator->fails()) {        
            return response()->json([
                'code'=>500,
                'api_status'=>0,
                'success'=>0,
                'message'=>__('app.Data is not in the proper format'),]);
            }
       $email = $request->email;
       $eid =DB::table('users')->where('email' , $email)->exists();
       if ($eid == true) {
            return response()->json([
                'api_status' => 0 ,
                'success' => 0,
                'code' => 200,
                'message'=> 'This email already exist'
            ],200);
        }
       else
       {
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input);
        $token =  $user->createToken($this -> secretKey)-> accessToken; 
        $name =  $user->name;
        $email = $user->email;
        $user->assignRole(['user']);
        return response()->json([
                'api_status'=>1,
                'success' => 1,
                'code'=>201,
                'message' => 'Successfully registered',
                'data'=> [
                    'user' => auth()->user(),
                    'roles' => ['admin'],
                    'token' => $token
                ]                    
              ],201); 
            }
        }
        return response()->json($this -> wrongHTTP, 400);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|email', 
            'password' => 'required', 
        ]);

        if (!auth()->attempt($loginData)) {
            return response()->json($this -> wrongUser, 400);
        }

        $token =  auth()->user()->createToken($this -> secretKey)->accessToken; 

        return response()->json([
            'api_status'=>1,
            'success'=>1,
            'code'=>200,
            'message' => 'Successfully logined',
            'data' => [
                'user' => auth()->user(),                
                'roles' => auth()->user()->getRoleNames(),
                'token' => $token
            ]
        ], 200);
    }
    
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'api_status'=>1,
            'success'=>1,
            'code'=>200,
            'message' => 'Successfully logged out'
        ], 200);
    }

    public function info()
    {
        return response()->json([
            'api_status'=>1,
            'success'=>1,
            'code'=>200,
            'message' => 'User logined',
            'data' => ['user' => auth()->user()]
        ], 200);
    }

    public function user(Request $request)
    { 
        return response()->json([
            'api_status'=>1,
            'success'=>1,
            'code'=>200,
            'message' => 'User info',
            'data' => [
                'user' => $request->user(),
                'permissions' => $request->user()->getAllPermissions()->pluck('name')->toArray(),
                'roles' => $request->user()->getRoleNames()
            ]
        ], 200);
    }
}
