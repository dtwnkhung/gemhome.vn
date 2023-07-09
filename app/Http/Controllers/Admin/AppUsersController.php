<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\AppUser;
use App\Models\Package;
use App\Models\AppUserPermission;
use App\Models\AppUserPackage;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\EditUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppUsersController extends Controller
{
    public function __construct() {
        $this->middleware('permission:role-list');
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy', 'trashed', 'restore']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = AppUser::all()->last();

        $perpage = config('app.perpage');
        $search = request()->query('search');
        if ($search) {
            $usersData =$user->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
            $totalUsers = $usersData->count() . ' result for: ' . $search;
            $users = $usersData->paginate($perpage);
        } else {
            $totalUsers = is_null($user) ? 0 :  $user->count();
            $users = $user;
            if (!is_null($user)) $users = $user->paginate($perpage);
        }
        return view('admin.appuser.index')
            ->with('users', $users)
            ->with('totalUsers', $totalUsers)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_package_in_database = Package::all();
        return view('admin.appuser.create')->with('packages', $all_package_in_database);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = (isset($request->image)) ? $request->image->store('hocviens') : null; 
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:hoc_viens',
            'password' => 'required|confirmed|min:6',
            'phone' => 'nullable|min:10|numeric',
            'date_of_birth' => 'nullable|date_format:Y-m-d|before:today',
            'description' => 'nullable',
            'balance' => 'numeric'
        ]);
        $user = AppUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),  
            'phone' => $request->phone,
            'date_of_birth' => $request->date_of_birth,
            'balance' => $request->balance,
            'facebook' => $request->facebook,
            'description' => $request->description,
            'image' => $image,
            'status' => $request->status,
        ]);
        if ($request->packages) {
            $user->packages()->attach($request->packages);
        }   
        session()->flash('success', __('app.Created_User_successfully.'));
        // redirect user
        return redirect(route('hoc-vien.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $all_packages_in_database = Package::all();
        // AppUser Logs
        $logs = AppUserPackage::where('hocvien_id', $id)->get();
        $user = AppUser::findOrFail($id);
        return view('admin.appuser.create')
            ->with('user', $user )
            ->with('packages', $all_packages_in_database)
            ->with('logs', $logs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'nullable|min:10|numeric',
            'date_of_birth' => 'nullable|date_format:Y-m-d|before:today',
            'description' => 'nullable',
            'balance' => 'numeric'
        ]); 
        
        $user = AppUser::findOrFail($id);
        if (isset($request->image)) {
            $image = $request->image->store('hocviens');
        } else if (isset($request->image_src)) {
            $image = $user->image;
        } else {
            $image = $user->image;
        } 
        $user->update([
            'name' => $request->name,
            'password' => isset($request->password) ? Hash::make( $request->password) : $user->password,
            'phone' => $request->phone,
            'date_of_birth' => $request->date_of_birth,
            'balance' => $request->balance,
            'facebook' => $request->facebook,
            'description' => $request->description,
            'image' => $image,
            'status' => $request->status,
        ]);      
        // flash message
        session()->flash('success', __('app.Edit User successfully.'));
        // redirect user
        return redirect(route('hoc-vien.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = AppUser::withTrashed()->where('id', $id)->firstOrFail();
        if ($user->trashed()) {
            $user->forceDelete();
            Storage::delete($user->image);      
            $message = __('app.Deleted :name successfully.', ['name' =>__('app.student')]);
            $redirectPage = 'trashed-questions.index';
        } else {
            $user->delete();
            $message = __('app.Trashed :name successfully.', ['name' =>__('app.student')]);
            $redirectPage = 'hoc-vien.index';
        }
        // flash message
        session()->flash('success', $message);
        
        return redirect()->back();
    }
    public function trashed(AppUser $user)
    {
        $pageTitle =  __('app.Trashed :name', ['name' => __('app.Student')]);        
        $search = request()->query('search');
        $itemsData = $trashed = AppUser::onlyTrashed();
        $totalItems = $itemsData->count();
        $trashed = $itemsData->latest()->paginate(config('app.perpage'));  
        // redirect user
        return view('admin.appuser.index')
            ->with('totalUsers', $totalItems)
            ->with('users', $trashed)
            ->with('search', $search)
            ->with('pageTitle', $pageTitle);
        
    }

    public function restore($id)
    {
        $user = AppUser::withTrashed()->where('id', $id)->firstOrFail();        
        $user->restore();        
        session()->flash('success', __('app.:name retore successfully.', ['name' => __('app.student')]));
        return redirect(route('trashed-hoc-vien.index'));
    }
}
