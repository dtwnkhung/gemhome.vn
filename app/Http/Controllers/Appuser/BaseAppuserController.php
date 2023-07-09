<?php
namespace App\Http\Controllers\Appuser;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SiteOption;

class BaseAppuserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest:appuser')->except('logout');
        
        $this->logo_url = SiteOption::where('name', 'logo')->first();
        $this->main_color = SiteOption::where('name', 'main_color')->first();
        $this->header_bg = SiteOption::where('name', 'header_bg')->first();
        $this->header_text_color = SiteOption::where('name', 'header_text_color')->first();
        $this->footer_content = SiteOption::where('name', 'footer_content')->first();

        view()->share('logo_url', isset($this->logo_url['image']) ? $this->logo_url['image'] : $this->logo_url['value']);
        view()->share('main_color', $this->main_color['value']);
        view()->share('header_bg', $this->header_bg['value']);
        view()->share('header_text_color', $this->header_text_color['value']);
        view()->share('footer_content', $this->footer_content['value']);

        $this->menus = Menu::orderBy('order', 'asc')->get();
        view()->share('menus', $this->menus);
    }
}
