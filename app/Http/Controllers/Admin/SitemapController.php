<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index() {
        \CmsUtils::create_sitemap();
        // return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
        return 'Created sitemap done: ' . config('app.url') . '/sitemap.xml' . ' - ' . config('app.url');
    }
}
