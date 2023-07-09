<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
class PagesController extends Controller
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
            $itemsData =Page::where('title', 'LIKE', '%'.$search.'%')
                ->orWhere('slug', 'LIKE', '%'.$search.'%');
            $totalItems = $itemsData->latest()->get()->count() . ' result for: ' . $search;
            $itemsData = $itemsData->paginate($perpage);
        } else {
            $totalItems = Page::latest()->get()->count();
            $itemsData = Page::latest()->paginate($perpage);
        }
        return view('admin.pages.index')
            ->with('totalItems', $totalItems)
            ->with('pages', $itemsData)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = null;
        if (isset($request->image)) {
            $image = $request->image->store('pages');
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name); 

        if (Page::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('pages', $newSlug);
        }
        
        $isSetHomepage = false;
        if (isset($request->home)) {
            $isSetHomepage = true;
            Page::where('home', 1)->update(['home' => 0]);
        }
        $pages = Page::create([
            'title' => $request->name,
            'slug' => $newSlug,
            'home' => $isSetHomepage,
            'description' => $request->description,
            'content' =>  $request->content,
            'image' => $image,
            'order' => is_null($request->order) ? 0 : $request->order
        ]); 
        if ($request->categories) {
            $pages->categories()->attach($request->categories);
        }
        if ($request->tags) {
            $pages->tags()->attach($request->tags);
        }
        // flash message
        session()->flash('success', __('app.Created :name successfully.', ['name' => __('app.page')]));

        
        // redirect user
        return redirect(route('pages.index'));
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
    public function edit(Page $page)
    {
        return view('admin.pages.create')
            ->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $isSetHomepage = false;
        if (isset($request->home)) {
            $isSetHomepage = true;
            Page::where('home', 1)->update(['home' => 0]);
        }
        $page = Page::where('slug', $slug)->first(); 
        if (is_null($page)) {
            // flash message
            session()->flash('error', __('app.NotFound'));
            // redirect user
            return redirect(route('pages.index'));
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name);

        if (Page::where('slug', $newSlug)->where('id', '<>', $page->id)->exists()) {
            $newSlug = \CmsSlug::createSlug('pages', $newSlug, $page->id);
        }
        if (isset($request->image)) {
            $image = $request->image->store('pages');
        } else {
            $image = $page->image;
        }
        
        if ($request->categories) {
            $page->categories()->sync($request->categories);
        }
        if ($request->tags) {
            $page->tags()->sync($request->tags);
        }

        $page->update([
            'title' => $request->name,
            'home' => $isSetHomepage,
            'slug' => $newSlug,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $image,
            'order' => is_null($request->order) ? 0 : $request->order
        ]); 
        // flash message
        session()->flash('success', __('app.Update :name successfully.', ['name' => __('app.page')]));
        // redirect user
        return redirect(route('pages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $additionMessage = '';
        $page = Page::withTrashed()->where('slug', $slug)->firstOrFail();
        if ($page->trashed()) {
            $page->forceDelete();
            try {
                Storage::delete($page->image);
            } catch (\Throwable $th) {
                $additionMessage = ' '. __('app.No image');
            }
            
            $message = __('app.Deleted :name successfully.', ['name' =>__('app.page')]) . $additionMessage;
            $redirectPage = 'trashed-pages.index';
        } else {
            $page->delete();
            $message = __('app.Trashed :name successfully.', ['name' =>__('app.page')]);
            $redirectPage = 'pages.index';
        }
        // flash message
        session()->flash('success', $message);
        // redirect user
        return redirect(route($redirectPage));
    }

    public function trashed(Page $post)
    {
        $pageTitle =  __('app.Trashed :name', ['name' => __('app.Page')]);        
        $search = request()->query('search');
        $itemsData = $trashed = Page::onlyTrashed();
        $totalItems = $itemsData->count();
        $trashed = $itemsData->latest()->paginate(config('app.perpage'));  
        
        // redirect user
        return view('admin.pages.index')
            ->with('pages', $trashed)
            ->with('totalItems', $totalItems)
            ->with('pageTitle', $pageTitle)
            ->with('search', $search);
    }
    public function restore($slug)
    {
        $page = Page::withTrashed()->where('slug', $slug)->firstOrFail();
        
        $page->restore();
        
        session()->flash('success', __('app.:name restore successfully', ['name' => __('app.Page')]));

        return redirect(route('trashed-pages.index'));
    }
}
