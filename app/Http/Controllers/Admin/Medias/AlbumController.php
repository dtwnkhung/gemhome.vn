<?php

namespace App\Http\Controllers\Admin\Medias;

use App\Http\Controllers\Admin\Medias\BaseController;
use Illuminate\Http\Request;

class AlbumController extends BaseController
{
    private $slug;

    public function __construct(Request $slug = null)
    {
        $this->model = '\App\Models\Medias\Album';
        $this->table = 'albums';
        $this->label = 'album';
        $this->router = 'album';
        $this->template_folder = 'admin.medias.albums';
        
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
        return $attrs;
    }
    
}
