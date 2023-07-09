<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteOption;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SiteOptions\StoreSiteOptionTypeRequest;

class SiteOptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:role-list');
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy', 'trashed', 'restore']]);
        
        $this->positions = array (
            0 => 
            array (
              'id' => 1,
              'label' => 'Header',
              'value' => 'header',
            ),
            1 => 
            array (
              'id' => '2',
              'label' => 'Footer',
              'value' => 'footer',
            ),
            2 => 
            array (
              'id' => '3',
              'label' => 'Sidebar',
              'value' => 'sidebar',
            ),
          );
        view()->share('positions', $this->positions);
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
            $itemsData = SiteOption::where('name', 'LIKE', "%{$search}%");
            $totalItems = $itemsData->count() . ' result for: ' . $search;
            $itemsData = $itemsData->latest()->paginate($perpage);
        } else {
            $totalItems = SiteOption::count();
            $itemsData = SiteOption::latest()->paginate($perpage);
        }
        return view('admin.siteoptions.index')
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
        $items = SiteOption::latest()->get();
        return view('admin.siteoptions.create')
            ->with('items', $items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiteOptionTypeRequest $request)
    {
        $image = isset($request->image_src) ? $request->image_src : null;
        if (isset($request->image)) {
            $image = $request->image->store('site-options');
        } 
        $item = SiteOption::create([
            'name' => $request->name,
            'type' => $request->type,
            'desc' => $request->desc,
            'value' => $request->value,
            'image' => $image
        ]);
        // flash message
        session()->flash('success', __('app.Created :name successfully.', ['name'=>__('app.site options')]));
        // redirect user
        return redirect(route('site-options.edit', $item->id));
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
        $item = SiteOption::where('id', $id)->first();
        // dd($item->parent_id);
        $items = SiteOption::latest()->get();
        return view('admin.siteoptions.create')        
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
    public function update(StoreSiteOptionTypeRequest $request, $id)
    {
        $item = SiteOption::where('id', $id)->first();
        $image = isset($request->image_src) ? $request->image_src : null;
        if (isset($request->image)) {
            $image = $request->image->store('site-options');
            Storage::delete($item->image);
        }
        if (is_null($image)) {
            Storage::delete($item->image);
        }
        $item->update([
            'name' => $request->name,
            'type' => $request->type,
            'desc' => $request->desc,
            'value' => $request->value,
            'image' => $image
        ]);
        // flash message
        session()->flash('success', __('app.Updated :name successfully.', ['name'=>__('app.site options')]));
        // redirect user
        return redirect(route('site-options.edit', $item->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SiteOption::where('id', $id)->first();
        if ($item->image) Storage::delete($item->image);
        $item->forceDelete();
        // flash message
        session()->flash('success', __('app.Deleted :name successfully.', ['name'=>__('app.site options')]));
        // redirect user
        return back()->withInput();
    }
}
