<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Tag;


use Illuminate\Support\Str;
use App\Http\Requests\Tags\CreateTagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;

class TagsController extends Controller
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
            $tagsData =Tag::where('name', 'LIKE', "%{$search}%");
            $totalTags = $tagsData->count() . ' result for: ' . $search;
            $tagsData = $tagsData->latest()->paginate($perpage);
        } else {
            $totalTags = Tag::count();
            $tagsData = Tag::latest()->paginate($perpage);
        }
        return view('admin.tags.index')
            ->with('totalTags', $totalTags)
            ->with('tags', $tagsData)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTagRequest $request)
    {
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name); 
        
        if (Tag::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('tags', $newSlug);
        }

        $tag = Tag::create([
            'name' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description
        ]); 
        // flash message
        session()->flash('success', __('app.Created tag successfully.'));
        // redirect user
        return redirect(route('tags.index'));
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
    public function edit(Tag $tag)
    {
        return view('admin.tags.create')->with('tag', $tag);
    }

    // ajaxCreate
    public function ajaxCreate(CreateTagRequest $request) {
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name); 
        if (Tag::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('categories', $newSlug);
        }

        $tag = Tag::create([
            'name' => $request->name,
            'slug' => $newSlug
        ]);
        return response()->json([
            "status" => 200,
            "message" => "Success",
            "data" => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, $slug)
    {
        $tag = Tag::where('slug', $slug)->first(); 
        if (is_null($tag)) {
            // flash message
            session()->flash('error', __('app.NotFound'));
            // redirect user
            return redirect(route('tags.index'));
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name);
        if (Tag::where('slug', $newSlug)->where('id', '<>', $tag->id)->exists()) {
            $newSlug = \CmsSlug::createSlug('tags', $newSlug, $tag->id);
        }
        
        $tag->update([
            'name' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description
        ]); 
        // flash message
        session()->flash('success', __('app.Update :name successfully.', ['name' => __('app.tag')]));
        // redirect user
        return redirect(route('tags.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
