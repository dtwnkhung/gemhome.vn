<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;

class CategoriesController extends Controller
{
    public function __construct() {
        $this->middleware('permission:category-list');
        $this->middleware('permission:category-create', ['only' => ['create','store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
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
            $categoriesData =Category::where('name', 'LIKE', "%{$search}%");
            $totalCategories = $categoriesData->count() . ' result for: ' . $search;
            $categoriesData = $categoriesData->latest()->paginate($perpage);
        } else {
            $totalCategories = Category::count();
            $categoriesData = Category::latest()->paginate($perpage);
        }
        return view('admin.categories.index')
            ->with('totalCategories', $totalCategories)
            ->with('categories', $categoriesData)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    public function ajaxCreate(CreateCategoryRequest $request) {
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name); 
        if (Category::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('categories', $newSlug);
        }

        $category = Category::create([
            'name' => $request->name,
            'slug' => $newSlug
        ]);
        return response()->json([
            "status" => 200,
            "message" => "Success",
            "data" => $category
        ]);
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
        
        if (Category::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('categories', $newSlug);
        }

        $category = Category::create([
            'name' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description
        ]); 
        // flash message
        session()->flash('success', __('app.Created category successfully.'));
        // redirect user
        return redirect(route('categories.index'));
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
    public function edit(Category $category)
    {
        return view('admin.categories.create')->with('category', $category);
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
        $category = Category::where('slug', $slug)->first(); 
        if (is_null($category)) {
            // flash message
            session()->flash('error', __('app.NotFound'));
            // redirect user
            return redirect(route('categories.index'));
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name);
        if (Category::where('slug', $newSlug)->where('id', '<>', $category->id)->exists()) {
            $newSlug = \CmsSlug::createSlug('categories', $newSlug, $category->id);
        }
        
        $category->update([
            'name' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description
        ]); 
        // flash message
        session()->flash('success', __('app.Update category successfully.'));
        // redirect user
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        // flash message
        session()->flash('success', __('app.Deleted category successfully.'));
        // redirect user
        return redirect(route('categories.index'));
    }
}
