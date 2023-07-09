<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;


use App\Http\Requests\Posts\CreatePostsRequest;
use App\Http\Requests\Posts\UpdatePostsRequest;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['index', 'show']);
        // $this->authorizeResource('post');
        $this->middleware('permission:post-list');
        $this->middleware('permission:post-create', ['only' => ['create','store']]);
        $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:post-delete', ['only' => ['destroy', 'trashed', 'restore']]);
        
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
            $postsData =Post::where('name', 'LIKE', "%{$search}%");
            $totalPosts = $postsData->latest()->get()->count() . ' result for: ' . $search;
            $postsData = $postsData->paginate($perpage);
        } else {
            $totalPosts = Post::latest()->get()->count();
            $postsData = Post::latest()->paginate($perpage);
        }
        return view('admin.posts.index')
            ->with('totalPosts', $totalPosts)
            ->with('posts', $postsData)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create', Post::class);

        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('admin.posts.create')
            ->with('categories', $categories)
            ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostsRequest $request)
    {
        // $this->authorize('create', Post::class);

        $image = null;
        if (isset($request->image)) {
            $image = $request->image->store('posts');
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name); 
        
        if (Post::where('slug', $newSlug)->exists()) {
            $newSlug = \CmsSlug::createSlug('posts', $newSlug);
        }
        $posts = Post::create([
            'title' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description,
            'content' =>  $request->content,
            'image' => $image
        ]); 
        if ($request->categories) {
            $posts->categories()->attach($request->categories);
        }
        if ($request->tags) {
            $posts->tags()->attach($request->tags);
        }
        // flash message
        session()->flash('success', __('app.Created post successfully.'));

        // \CmsUtils::create_sitemap();
        // redirect user
        return redirect(route('posts.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $this->authorize('view', $post);
        // return view('posts.show')->with('post'=>$post));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.create')
            ->with('post', $post)
            ->with('categories', Category::get())
            ->with('tags', Tag::get());
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
        // $this->authorize('update', $post);
        
        $post = Post::where('slug', $slug)->first(); 
        if (is_null($post)) {
            // flash message
            session()->flash('error', __('app.NotFound'));
            // redirect user
            return redirect(route('posts.index'));
        }
        if (isset($request->slug)) {
            $newSlug = $request->slug;
        } else $newSlug = Str::slug($request->name);

        if (Post::where('slug', $newSlug)->where('id', '<>', $post->id)->exists()) {
            $newSlug = \CmsSlug::createSlug('posts', $newSlug, $post->id);
        }
        if (isset($request->image)) {
            $image = $request->image->store('posts');
        } else {
            $image = $post->image;
        }
        
        if ($request->categories) {
            $post->categories()->sync($request->categories);
        }
        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        $post->update([
            'title' => $request->name,
            'slug' => $newSlug,
            'description' => $request->description ,
            'content' => $request->content,
            'image' => $image
        ]); 
        // flash message
        session()->flash('success', __('app.Update :name successfully.', ['name' => __('app.post')]));

        // \CmsUtils::create_sitemap();
        // redirect user
        return redirect(route('posts.index'));
    }

    /**
     * Trashed the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        // $this->authorize('delete', $post);

        $post = Post::withTrashed()->where('slug', $slug)->firstOrFail();
        if ($post->trashed()) {
            $post->forceDelete();
            Storage::delete($post->image);
            $message = __('app.Deleted :name successfully.', ['name' =>__('app.post')]);
            $redirectPage = 'trashed-posts.index';
        } else {
            $post->delete();
            $message = __('app.Trashed :name successfully.', ['name' =>__('app.post')]);
            $redirectPage = 'posts.index';
        }
        // flash message
        session()->flash('success', $message);

        // \CmsUtils::create_sitemap();
        // redirect user
        return redirect(route($redirectPage));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trashed(Post $post)
    {
        // $this->authorize('delete', $post);

        $pageTitle =  __('app.Trashed posts');        
        $search = request()->query('search');
        $postsData = $trashed = Post::onlyTrashed();
        $totalPosts = $postsData->count();
        $trashed = $postsData->latest()->paginate(config('app.perpage'));  
        // \CmsUtils::create_sitemap();
        // redirect user
        return view('admin.posts.index')
            ->with('posts', $trashed)
            ->with('totalPosts', $totalPosts)
            ->with('pageTitle', $pageTitle)
            ->with('search', $search);
    }

    /**
     * Restore trahed posts.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($slug)
    {
        // $this->authorize('delete', $post);

        $post = Post::withTrashed()->where('slug', $slug)->firstOrFail();
        
        $post->restore();
        
        session()->flash('success', __('app.Post retore successfully.'));
        // \CmsUtils::create_sitemap();

        return redirect(route('trashed-posts.index'));
    }
}
