<?php

namespace App\Http\Controllers\Frontend;

use \stdClass;

use App\Http\Controllers\Frontend\BaseFrontendController;
use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\Post;
use App\Models\Category;

class FrontendController extends BaseFrontendController
{ 
    private static function get_list($arrayList, $item_key, $model, $count = 12) {
        $list = []; 
        if (isset($arrayList) && count($arrayList) > 0) {
            foreach ($arrayList as $key => $value) {
                $object = new stdClass();
                $object->name = $value->name;
                $object->slug = $value->slug;
                $object->parent = $value;
                $object->data = $model::where($item_key, $value->id)
                    ->latest()
                    ->paginate($count);
                 if ($model == "App\Models\Examinationtype") {
                    foreach ($object->data as $k => $item) {
                        $model_item = Examination::where('examinationtype_id', $item->id)->get();
                        $object->data[$k]->total_item = count($model_item);
                    }
                } else if ($model == "App\Models\Examination") {
                    foreach ($object->data as $k => $item) {
                        $model_item = Question::where('examination_id', $item->id)->get();
                        $object->data[$k]->total_item = count($model_item);
                    }
                } else if ($model == "App\Models\VocabularyType") {
                    foreach ($object->data as $k => $item) {
                        $model_item = LearnVocabulary::where('vocabulary_type_id', $item->id)->get();
                        $object->data[$k]->total_item = count($model_item);
                    }
                } else if ($model == "App\Models\LearnVocabulary") {
                    foreach ($object->data as $k => $item) {
                        $model_item = VocLearn::where('learn_vocabulary_id', $item->id)->get();
                        $object->data[$k]->total_item = count($model_item);
                    }
                }
                if ($value->slug != 'undefined')  $list[$key] = $object;
            } 
            return $list;
        }
        return $list;
    } 

    public function index()
    {
        $page = Page::where('home', 1)->latest()->firstOrFail();
        $SEO = new \stdClass(); 
        $SEO->canonical = \URL::current();
        if ($page) {
            $SEO->title = $page->title;
            $SEO->description = $page->description;
            $SEO->image = $page->image;
            return view('frontend.page')
                ->with('page', $page)
                ->with('SEO', $SEO);
        }
        return view('frontend.home')
            ->with('page', $page)
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
