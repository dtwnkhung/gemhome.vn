<?php

namespace App\Http\Controllers\Admin\Medias;

use App\Http\Controllers\Admin\Medias\BaseController;
use Illuminate\Http\Request;

class PictureController extends BaseController
{
    private $slug;

    public function __construct(Request $slug = null)
    {
        $this->model = '\App\Models\Medias\Picture';
        $this->parent_model = '\App\Models\Medias\Album';
        $this->parent_table = 'albums';
        $this->parent_field = 'album_id';
        $this->table = 'pictures';
        $this->label = 'picture';
        $this->router = 'picture';
        $this->parent_router = 'album';
        $this->template_folder = 'admin.medias.pictures';
        
        view()->share('controller_label', $this->label);
        view()->share('controller_router', $this->router);
        view()->share('parent_router', $this->parent_router);
    }
}
