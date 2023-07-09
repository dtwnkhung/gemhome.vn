<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;

class ProjectCategoryController extends Controller
{
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
            $itemsData = ProjectCategory::where('name', 'LIKE', '%'.$search.'%')
                ->orWhere('slug', 'LIKE', '%'.$search.'%');
            $totalItems = $itemsData->latest()->get()->count() . ' result for: ' . $search;
            $itemsData = $itemsData->paginate($perpage);
        } else {
            $totalItems = ProjectCategory::latest()->get()->count();
            $itemsData = ProjectCategory::latest()->paginate($perpage);
        }
        return view('admin.project_categories.index')
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
        return view('admin.project_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name); 
        
        if (ProjectCategory::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('project_categories', $newSlug);
        }

        $category = ProjectCategory::create([
            'name' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description
        ]); 
        // flash message
        session()->flash('success', __('app.Created category successfully.'));
        // redirect user
        return redirect(route('project-categories.index'));
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
    public function edit(ProjectCategory $project_category)
    {
        return view('admin.project_categories.create')->with('category', $project_category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $slug)
    {
        $category = ProjectCategory::where('slug', $slug)->first(); 
        if (is_null($category)) {
            // flash message
            session()->flash('error', __('app.NotFound'));
            // redirect user
            return redirect(route('project-categories.index'));
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name);
        if (ProjectCategory::where('slug', $newSlug)->where('id', '<>', $category->id)->exists()) {
            $newSlug = \CmsSlug::createSlug('project_categories', $newSlug, $category->id);
        }
        
        $category->update([
            'name' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description
        ]); 
        // flash message
        session()->flash('success', __('app.Update category successfully.'));
        // redirect user
        return redirect(route('project-categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = ProjectCategory::where('slug', $slug)->first();
        $category->delete();
        // flash message
        session()->flash('success', __('app.Deleted category successfully.'));
        // redirect user
        return redirect(route('project-categories.index'));
    }

    public function ajaxCreate(Request $request) {
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = \Str::slug($request->name); 
        if (ProjectCategory::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('project_categories', $newSlug);
        }

        $category = ProjectCategory::create([
            'name' => $request->name,
            'slug' => $newSlug
        ]);
        return response()->json([
            "status" => 200,
            "message" => "Success",
            "data" => $category
        ]);
    }
}
