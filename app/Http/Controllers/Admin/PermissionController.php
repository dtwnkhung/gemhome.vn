<?php

namespace App\Http\Controllers\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:role-list');
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
        $this->roles = Role::orderBy('created_at', 'desc')->get();
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
            $permissionsData =Permission::orderBy('created_at', 'desc')->where('name', 'LIKE', "%{$search}%");
            $totalPermissions = $permissionsData->count() . ' result for: ' . $search;
            $permissions = $permissionsData->paginate($perpage);
        } else {
            $totalPermissions = Permission::count();
            $permissions = Permission::orderBy('created_at', 'desc')->paginate($perpage);
        }
        return view('admin.permissions.index')
            ->with('permissions', $permissions)
            ->with('totalPermissions', $totalPermissions)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permissions = Permission::whereName($request->name)->get(['name']);
        if (count($permissions) === 0) {
            $role = Permission::create(['name' => $request->name]);
            // flash message
            session()->flash('success', __('app.:name has been created successfully.', ['name'=> __('app.Permission')]));
            // redirect user
            return redirect(route('permissions.index'));
        } else {
            session()->flash(
                'error',
                __('app.:name name has been exists.', ['name' => __('app.Permission')])
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
    public function edit(Permission $permission)
    {
        return view('admin.permissions.create')
            ->with('permission',  $permission);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRoleRequest $request, Permission $permission)
    {
        $role->update([
            'name' => $request->name
        ]);
        // flash message
        session()->flash('success', __('app.Update Role successfully.'));
        // redirect user
        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
