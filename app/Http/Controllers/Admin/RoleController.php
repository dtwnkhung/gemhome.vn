<?php

namespace App\Http\Controllers\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Roles\CreateRoleRequest;

class RoleController extends Controller
{
    function __construct()
    {
        $this->permissions = Permission::orderBy('created_at', 'desc')->get();
        
        //  $this->middleware('permission:super-admin');
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
        $perpage = config('app.perpage');
        $search = request()->query('search');
        if ($search) {
            $rolesData =Role::orderBy('created_at', 'desc')->where('name', 'LIKE', "%{$search}%");
            $totalRoles = $rolesData->count() . ' result for: ' . $search;
            $roles = $rolesData->paginate($perpage);
        } else {
            $totalRoles = Role::count();
            $roles = Role::orderBy('created_at', 'desc')->paginate($perpage);
        }
        // dd($roles[0]->permissions()->pluck('name')->toArray());
        return view('admin.roles.index')
            ->with('roles', $roles)
            ->with('totalRoles', $totalRoles)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create')->with('permissions', $this->permissions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        $roles = Role::whereName($request->name)->get(['name']);
        if (count($roles) === 0) {
            $role = Role::create(['name' => $request->name]);
            $role->syncPermissions($request->permissions);
            // flash message
            session()->flash('success', __('app.Created Role successfully.'));
            // redirect user
            return redirect(route('roles.index'));
        } else {
            session()->flash(
                'error',
                __('app.:name name has been exists.', ['name' => __('app.Role')])
            );
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.roles.create')
            ->with('role',  $role)
            ->with('permissions', $this->permissions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRoleRequest $request, Role $role)
    {
        $role->update([
            'name' => $request->name
        ]);
        $role->syncPermissions($request->permissions);
        // flash message
        session()->flash('success', __('app.Update Role successfully.'));
        // redirect user
        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
