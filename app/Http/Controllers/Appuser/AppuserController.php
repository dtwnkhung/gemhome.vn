<?php

namespace App\Http\Controllers\Appuser;

use App\Models\User;
use App\Models\AppUser;
use App\Models\Package;
use App\Models\HocvienPackage;
use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\EditUserRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppuserController extends BaseAppuserController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->middleware('guest:appuser')->except('logout');
        return view('appuser.profile')->with('user', auth('appuser')->user());
    }
    public function profile (Request $request)
    {
        $this->middleware('guest:appuser')->except('logout');
        return view('appuser.profile')->with('user', auth('appuser')->user());
    }

    protected function update(Request $request, $id)
    {
        $user = AppUser::findOrFail($id);
        if (isset($request->image)) {
            $image = \Storage::url($request->image->storeAs('hocviens', Str::slug($user->email) . '.jpg'));
        } else if (isset($request->image_src)) {
            $image = $user->image;
        } else {
            $image = $user->image;
        } 
        $validated = $request->validate([
            'date_of_birth' => 'nullable|date_format:Y-m-d|before:today',
            'phone' => 'nullable',
            'description' => 'nullable',
            'facebook' => 'nullable',
            'image' => 'nullable | image | mimes:jpeg,jpg,png | max:150'
        ]);
        $user->update([
            'name' => $request['name'],
            'date_of_birth' => $request['date_of_birth'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'description' => $request['description'],
            'facebook' => $request['facebook'],
            'image' => $image,
        ]);
        session()->flash('success', __('app.Edit User successfully.'));
        return redirect()->route('appuser.profile');
    }
    
    protected function changepasswordform(Request $request)
    {
        $this->middleware('auth:appuser');
        
        return view('appuser.changepassword')->with('user', auth('appuser')->user());
    }
    protected function changepassword(Request $request, $id)
    {
        $this->middleware('auth:appuser');
        if (! Hash::check($request->old_password, auth()->user()->password)) {
            session()->flash('error', __('auth.The :attribute is not match with old password.', ['attribute'=> __('auth.password')]));
            return redirect()->route('appuser.changepasswordform');
        }
        if (Hash::check($request->password, auth()->user()->password)) {
            session()->flash('error', __('auth.The :attribute is match with old password.', ['attribute'=> __('auth.password')]));
            return redirect()->route('appuser.changepasswordform');
        }
        $user = AppUser::findOrFail($id);
        
        $validated = $request->validate([         
            'old_password' => ['required', new MatchOldPassword],   
            'password' => 'required|confirmed|min:6',
        ]);
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        session()->flash('success', __('app.Edit :name successfully.', ['name'=> __('auth.password')]));
        return redirect()->route('appuser.profile');
    }

    protected function categories(Request $request)
    {
        $this->middleware('auth:appuser');       

        $all_package_in_database = Package::all();
        return view('appuser.categories')
            ->with('user', auth('appuser')->user())
            ->with('packages', $all_package_in_database);
    }

    public function upgrade($package_id)
    {
        $user = auth('appuser')->user();
        $package = Package::where('id', $package_id)->first();
        $data = Package::upgrade($user, $package);
        if ($data['status'] == false) {
            session()->flash('error', $data['message']);
            return redirect()->back();
        }
        session()->flash('success', $data['message']);
        return redirect()->back();
    }

    protected function logs(Request $request)
    {
        $this->middleware('auth:appuser');    
        $logs = HocvienPackage::where('hocvien_id', auth()->id())->get();
        $all_package_in_database = Package::all();
        return view('appuser.logs')
            ->with('user', auth('appuser')->user())
            ->with('packages', $all_package_in_database)
            ->with('logs', $logs);
    }

    protected function payment_method(Request $request)
    {
        $this->middleware('auth:appuser');    
        $logs = HocvienPackage::where('hocvien_id', auth()->id())->get();
        $all_package_in_database = Package::all();
        return view('appuser.payment-method')
            ->with('user', auth('appuser')->user())
            ->with('packages', $all_package_in_database)
            ->with('logs', $logs);
    }
}
