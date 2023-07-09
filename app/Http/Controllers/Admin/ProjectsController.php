<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ProjectCategory;
use App\Models\Project;

use App\Http\Requests\Posts\CreatePostsRequest;
use App\Http\Requests\Posts\UpdatePostsRequest;

class ProjectsController extends Controller
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
            $itemsData = Project::where('name', 'LIKE', '%'.$search.'%')
                ->orWhere('slug', 'LIKE', '%'.$search.'%');
            $totalItems = $itemsData->latest()->get()->count() . ' result for: ' . $search;
            $itemsData = $itemsData->paginate($perpage);
        } else {
            $totalItems = Project::latest()->get()->count();
            $itemsData = Project::latest()->paginate($perpage);
        }
        return view('admin.projects.index')
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
        $categories = ProjectCategory::latest()->get();
        return view('admin.projects.create')
            ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostsRequest $request)
    {
        $image = null;
        if (isset($request->image)) {
            $image = $request->image->store('projects');
        }
        $image_1 = null;
        if (isset($request->image_1)) {
            $image_1 = $request->image_1->store('projects');
        }
        $image_2 = null;
        if (isset($request->image_2)) {
            $image_2 = $request->image_2->store('projects');
        }
        $image_3 = null;
        if (isset($request->image_3)) {
            $image_3 = $request->image_3->store('projects');
        }
        $image_4 = null;
        if (isset($request->image_4)) {
            $image_4 = $request->image_4->store('projects');
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = \Str::slug($request->name); 
        
        if (Project::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('projects', $newSlug);
        }
        $projects = Project::create([
            'title' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description,
            'content' =>  $request->content,
            'image' => $image,
            'image_1' => $image_1,
            'image_2' => $image_2,
            'image_3' => $image_3,
            'image_4' => $image_4,
            'published_at' => $request->published_at,
        ]); 
        if ($request->categories) {
            $projects->categories()->attach($request->categories);
        }
        if ($request->tags) {
            $projects->tags()->attach($request->tags);
        }
        // flash message
        session()->flash('success', __('app.Created :name successfully', ['name' => __('app.project')]));

        // \CmsUtils::create_sitemap();
        // redirect user
        return redirect(route('projects.index'));
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
    public function edit(Project $project)
    {
        return view('admin.projects.create')
            ->with('item', $project)
            ->with('categories', ProjectCategory::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostsRequest $request, $slug)
    {   
        $item = Project::where('slug', $slug)->first(); 
        if (is_null($item)) {
            // flash message
            session()->flash('error', __('app.NotFound'));
            // redirect user
            return redirect(route('projects.index'));
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name);

        if (Project::where('slug', $newSlug)->where('id', '<>', $item->id)->exists()) {
            $newSlug = \CmsSlug::createSlug('projects', $newSlug, $item->id);
        }
        if (isset($request->image)) {
            $image = $request->image->store('projects');
        } else {
            $image = $item->image;
        }
        if (isset($request->image_1)) {
            $image_1 = $request->image_1->store('projects');
        } else {
            $image_1 = $item->image_1;
        }
        if (isset($request->image_2)) {
            $image_2 = $request->image_2->store('projects');
        } else {
            $image_2 = $item->image_2;
        }
        if (isset($request->image_3)) {
            $image_3 = $request->image_3->store('projects');
        } else {
            $image_3 = $item->image_3;
        }
        if (isset($request->image_4)) {
            $image_4 = $request->image_4->store('projects');
        } else {
            $image_4 = $item->image_4;
        }
        
        if ($request->categories) {
            $item->categories()->sync($request->categories);
        }

        $item->update([
            'title' => isset($request->name) ? $request->name : $item->name,
            'slug' => $newSlug,
            'description' => isset($request->description) ? $request->description : $item->description,
            'content' => isset($request->content) ? $request->content : $item->content,
            'image' => $image,
            'image_1' => $image_1,
            'image_2' => $image_2,
            'image_3' => $image_3,
            'image_4' => $image_4,
            'published_at' => $request->published_at,
        ]); 
        // flash message
        session()->flash('success', __('app.Update :name successfully.', ['name' => __('app.project')]));
        // redirect user
        return redirect(route('projects.index'));
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
