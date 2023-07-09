<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function __construct() {
        $this->middleware('permission:menu-list');
        $this->middleware('permission:menu-create', ['only' => ['create','store']]);
        $this->middleware('permission:menu-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:menu-delete', ['only' => ['destroy', 'trashed', 'restore']]);
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
            $itemsData = Menu::where('title', 'LIKE', "%{$search}%");
            $totalItems = $itemsData->count() . ' result for: ' . $search;
            $itemsData = $itemsData->latest()->paginate($perpage);
        } else {
            $totalItems = Menu::count();
            $itemsData = Menu::latest()->paginate($perpage);
        }
        return view('admin.menu.index')
            ->with('totalItems', $totalItems)
            ->with('items', $itemsData)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Menu::latest()->get();
        return view('admin.menu.create')        
            ->with('items', $items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $menu = Menu::create([
            'title' => $request->title,
            'link' => $request->link,
            'parent_id' => $request->parent_id,
            'order' => $request->order,
            'class_name' => $request->class_name
        ]);
        // flash message
        session()->flash('success', __('app.Created :name successfully.', ['name'=>__('app.menu')]));
        // redirect user
        return redirect(route('menus.edit', $menu->id));
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
        $item = Menu::where('id', $id)->first();
        // dd($item->parent_id);
        $items = Menu::latest()->get();
        return view('admin.menu.create')        
            ->with('items', $items)        
            ->with('item', $item);
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
        $menu = Menu::where('id', $id)->first();
        $menu->update([
            'title' => $request->title,
            'link' => $request->link,
            'parent_id' => $request->parent_id,
            'order' => $request->order,
            'class_name' => $request->class_name
        ]);
        // flash message
        session()->flash('success', __('app.Updated :name successfully.', ['name'=>__('app.menu')]));
        // redirect user
        return redirect(route('menus.edit', $menu->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::where('id', $id)->first();
        $menu->forceDelete();
        // flash message
        session()->flash('success', __('app.Deleted :name successfully.', ['name'=>__('app.menu')]));
        // redirect user
        return back()->withInput();
    }
}
