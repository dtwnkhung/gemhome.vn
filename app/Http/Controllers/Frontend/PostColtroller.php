<?php

namespace App\Http\Controllers\Frontend;
use \stdClass;
use App\Http\Controllers\Frontend\BaseFrontendController;
use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Package;

class PostColtroller extends BaseFrontendController
{
    public function packages() {
        
        $all_package_in_database = Package::all();            
        return view('frontend.packages')->with('packages', $all_package_in_database);
    }
    public function view($slug) {
        $SEO = new \stdClass(); 
        $SEO->canonical = \URL::current();
        // Page check
        $page = Page::where('slug', $slug)->first();
        if ($page) {
            $SEO->title = $page->title;
            $SEO->description = $page->description;
            $SEO->image = $page->image;
            return view('frontend.page')
                ->with('page', $page)
                ->with('SEO', $SEO);
        }
        // Post check
        $category = Category::with('posts')->where('slug', $slug)->get();

        if (count($category) != 0) {
            $cat_post = $category[0]->posts()->paginate(12);

            $SEO->title = $category[0]->name;
            $SEO->description = $category[0]->description;
            $SEO->image = $category[0]->image;

            return view('frontend.posts.list')
                ->with('category', $category[0])
                ->with('cat_post', $cat_post)
                ->with('SEO', $SEO);
        }

        $post = Post::where('slug', $slug)->firstOrFail();
        $related_post = Post::whereHas('categories', function ($q) use ($post) {
            return $q->whereIn('name', $post->categories->pluck('name')); 
        })
            ->where('id', '!=', $post->id)
            ->paginate(6); 

        $SEO->title = $post->title;
        $SEO->description = $post->description;
        $SEO->image = $post->image;

        return view('frontend.posts.show')
            ->with('post', $post)
            ->with('related_post', $related_post)
            ->with('SEO', $SEO);
    }
    public function post_list()
    {
        $breadcrumb = [];
        $object = new stdClass();
        $object->name = 'Trang chủ';
        $object->url = '/Tin tức';
        array_push($breadcrumb, $object);

        $SEO = new \stdClass(); 
        $SEO->canonical = \URL::current();
        $SEO->title = 'Tin tức';
        $SEO->description = 'Trang tin tức';
        $SEO->image = '';

        $list = Post::latest()->paginate(config('app.perpage'));

        return view('frontend.posts.list')
            ->with('list', $list)
            ->with('breadcrumb', $breadcrumb)
            ->with('SEO', $SEO);
    }
}
