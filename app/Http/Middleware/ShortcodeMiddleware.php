<?php

namespace App\Http\Middleware;

use Closure;

class ShortcodeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if (!method_exists($response, 'content')):
            return $response;
        endif;
        $content = $response->content();
        
        $shortcode_str = '<!--[projects_list]-->';
        if (strpos($response->content(), $shortcode_str)):
            $list = \App\Models\Project::latest()->paginate(config('app.perpage'));
            $new_content = \View('frontend.shortcodes.projects_list')->with('list', $list);
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;

        $shortcode_str = '<!--[projects_slider]-->';
        if (strpos($content, $shortcode_str)):
            $list = \App\Models\Project::latest()->paginate(config('app.perpage'));
            $new_content = \View('frontend.shortcodes.projects_slider')->with('list', $list);
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;

        $shortcode_str = '<!--[lasted_news]-->';
        if (strpos($content, $shortcode_str)):
            $list = \App\Models\Post::latest()->paginate(3);
            $new_content = \View('frontend.shortcodes.lasted_news')->with('list', $list);
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;

        $shortcode_str = '<!--[socials_link]-->';
        if (strpos($content, $shortcode_str)):
            $new_content  = \App\Models\SiteOption::where('name', 'socials_link')->first();
            if (!is_null($new_content)) $new_content = $new_content['value'];
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;

        $shortcode_str = '<!--[main_menu]-->';
        if (strpos($content, $shortcode_str)):
            $list = \App\Models\Menu::orderBy('order', 'asc')->paginate(100);
            $new_content = \View('frontend.shortcodes.main_menu')->with('menus', $list);
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;

        $shortcode_str = '<!--[partners_slider]-->';
        if (strpos($content, $shortcode_str)):
            $list = \App\Models\Partner::orderBy('order', 'asc')->paginate(100);
            $new_content = \View('frontend.shortcodes.partners_slider')->with('list', $list);
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;

        $shortcode_str = '<!--[testimonials_slider]-->';
        if (strpos($content, $shortcode_str)):
            $list = \App\Models\Testimonial::orderBy('order', 'asc')->paginate(100);
            $new_content = \View('frontend.shortcodes.testimonials_slider')->with('list', $list);
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;
        $shortcode_str = '<!--[main_slider]-->';
        if (strpos($content, $shortcode_str)):
            $list = \App\Models\Slider::orderBy('order', 'asc')->paginate(100);
            $new_content = \View('frontend.shortcodes.main_slider')->with('list', $list);
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;

        $shortcode_str = '<!--[contact_form]-->';
        if (strpos($content, $shortcode_str)):
            $new_content = \View('frontend.shortcodes.contact_form');
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;
        $shortcode_str = '<!--[subscribe_form]-->';
        if (strpos($content, $shortcode_str)):
            $new_content = \View('frontend.shortcodes.contact_subscribe');
            $content = str_replace($shortcode_str, $new_content, $content);
        endif;
        
        $response->setContent($content);
        return $response;
    }
}
