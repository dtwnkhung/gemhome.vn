<?php

namespace App\Http\Controllers\Admin\Medias;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->model = '\App\Models\Medias\Library';
        $this->parent_model = false;
        $this->parent_table = null;
        $this->parent_field = null;
        $this->table = 'libraries';
        $this->label = 'library';
        $this->router = 'library';
        $this->template_folder = 'admin.medias.libraries';

        view()->share('controller_label', $this->label);
        view()->share('controller_router', $this->router);
    }
    public function updateAttrs($request, $slug = Null)
    {
        if (isset($slug)) {
            $newSlug = $slug;
        }
        $this->validate($request, [
            'title' => 'required|max:255',
            'slug' => 'required',
        ]);
        $image = $request->image;
        if (isset($request->image) && !is_null($request->image)) {
            $image = $request->image->store($this->table);
        } else if(isset($request->image_src) && !is_null($request->image_src)) {
            $image = $request->image_src;
        }
        $attrs = [
            'slug' => $newSlug,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'metatitle' => $request->metatitle,
            'headerhtml' => $request->headerhtml,
            'contenthtml' => $request->contenthtml,
            'footerhtml' => $request->footerhtml,
            'content' => $request->content,
            'order' => is_null($request->order) ? 0 : $request->order
        ];
        if (isset($this->parent_model) && $request->categories && isset($request->categories[0])) {
            $attrs[$this->parent_field] = $request->categories[0];
        }
        return $attrs;
    }
    private function update_relationship($item)
    {
        return $item;
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
            $categoriesData = $this->model::
                where('title', 'LIKE', "%{$search}%")
                ->orWhere('slug', 'LIKE', "%{$search}%")
                ->orWhere('id', '=', $search);
            $totalCategories = $categoriesData->count() . ' result for: ' . $search;
            $categoriesData = $categoriesData->latest()->paginate($perpage);
        } else {
            $totalCategories = $this->model::count();
            $categoriesData = $this->model::latest()->paginate($perpage);
        }
        return view($this->template_folder . '.index')
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
        $categories = false;
        if (isset($this->parent_model) && $this->parent_model != false) {
            $categories = $this->parent_model::latest()->paginate(100);
        }
        return view($this->template_folder . '.create')
            ->with('categories', $categories)
            ->with('parent_field', isset($this->parent_field) ? $this->parent_field : null);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = \Str::slug($request->title); 
        
        if ($this->model::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug($this->table, $newSlug);
        }
        $attrs = $this->updateAttrs($request, $newSlug);
        $category = $this->model::create($attrs);
        $category = $this->update_relationship($category);
        // flash message
        session()->flash('success', __('app.Created :name successfully.', ['name' => __('app.'. $this->label)]));
        // redirect user
        return redirect(route($this->router . '.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  str  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  str  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $categories = false;
        if (isset($this->parent_model) && $this->parent_model != false) {
            $categories = $this->parent_model::latest()->paginate(100);
        }
        $category = $this->model::where('slug', $slug)->first();
        return view($this->template_folder . '.create')
            ->with('category', $category)
            ->with('categories', $categories)
            ->with('parent_field', isset($this->parent_field) ? $this->parent_field : null);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  str  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $category = $this->model::where('slug', $slug)->first(); 
        if (is_null($category)) {
            // flash message
            session()->flash('error', __('app.NotFound'));
            // redirect user
            return redirect(route($this->router .'.index'));
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = \Str::slug($request->title);
        if ($this->model::where('slug', $newSlug)->where('id', '<>', $category->id)->exists()) {
            $newSlug = \CmsSlug::createSlug($this->table, $newSlug, $category->id);
        }
        $attrs = $this->updateAttrs($request, $newSlug);
        $category->update($attrs); 
        $category = $this->update_relationship($category);
        // flash message
        session()->flash('success', __('app.Update :name successfully.', ['name' => __('app.'. $this->label)]));
        // redirect user
        return redirect(route($this->router .'.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  str  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = $this->model::where('slug', $slug)->first();
        $category->delete();
        // flash message
        session()->flash('success', __('app.Deleted :name successfully.', ['name' =>  __('app.'. $this->label)]));
        // redirect user
        return redirect(route($this->router .'.index'));
    }

    public function ajaxCreate(Request $request) {
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = \Str::slug($request->title); 
        if ($this->model::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug($this->table, $newSlug);
        }
        if (is_null($newSlug)) {
            $newSlug = \CmsSlug::createSlug($this->table, 'empty-slug');   
        }

        $category = $this->model::create([
            'title' => $request->title,
            'slug' => $newSlug
        ]);
        return response()->json([
            "status" => 200,
            "message" => "Success",
            "data" => $category
        ]);
    }
}
