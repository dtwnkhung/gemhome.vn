<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\EditUserRequest;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:role-list');
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('roles');

        $perpage = config('app.perpage');
        $search = request()->query('search');
        if ($search) {
            $usersData =$user->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
            $totalUsers = $usersData->count() . ' result for: ' . $search;
            $users = $usersData->paginate($perpage);
        } else {
            $totalUsers = $user->count();
            $users = $user->paginate($perpage);
        }
        return view('admin.users.index')
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
        
        $all_roles_in_database = Role::all()->pluck('name');
        
        return view('admin.users.create')->with('roles', $all_roles_in_database);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->syncRoles($request->roles);
        // flash message
        session()->flash('success', __('app.Created_User_successfully.'));
        // redirect user
        return redirect(route('users.index'));
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
        $all_roles_in_database = Role::all()->pluck('name');
        
        return view('admin.users.create')
            ->with('user',  User::findOrFail($id))
            ->with('roles', $all_roles_in_database);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name ? $request->name : $user->name,
            'password' => isset($request->password) ? Hash::make( $request->password) : $user->password
        ]);        
        $user->syncRoles($request->roles);
        // flash message
        session()->flash('success', __('app.Edit User successfully.'));
        // redirect user
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (strval(Auth::user()->id) === $id) {
            session()->flash('error', __('app.Could not delete yourself.'));
            return redirect(route('users.index'));
        }
        $user = User::findOrFail($id);
        $user->delete();
        // flash message
        session()->flash('success', __('app.Deleted User successfully.'));
        // redirect user
        return redirect(route('users.index'));
    }
}
