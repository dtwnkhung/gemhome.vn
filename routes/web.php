<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {
    Route::get('/sitemap', 'Admin\SitemapController@index')->name('sitemap.index');
    Route::view('/', 'admin.index')->name('admin');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('roles', 'Admin\RoleController');
    Route::resource('permissions', 'Admin\PermissionController');
    Route::resource('categories', 'Admin\CategoriesController');
    Route::resource('tags', 'Admin\TagsController');
    Route::resource('pages', 'Admin\PagesController');
    Route::resource('project-categories', 'Admin\ProjectCategoryController');
    Route::post('project-categories/ajaxCreate', 'Admin\ProjectCategoryController@ajaxCreate')->name('project-categories.ajaxCreate');
    Route::resource('projects', 'Admin\ProjectsController');
    Route::get('trashed-pages', 'Admin\PagesController@trashed')->name('trashed-pages.index');
    Route::post('restore-pages/{slug}', 'Admin\PagesController@restore')->name('pages.restore');
    Route::resource('posts', 'Admin\PostsController');
    Route::get('trashed-posts', 'Admin\PostsController@trashed')->name('trashed-posts.index');
    Route::post('restore-posts/{slug}', 'Admin\PostsController@restore')->name('posts.restore');
    Route::post('categories/ajaxCreate', 'Admin\CategoriesController@ajaxCreate')->name('categories.ajaxCreate');
    Route::post('tags/ajaxCreate', 'Admin\TagsController@ajaxCreate')->name('tags.ajaxCreate');
    /* MENU */    
    Route::resource('menus', 'Admin\MenuController');
    /* SITE OPTIONS */    
    Route::resource('site-options', 'Admin\SiteOptionController');
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    })->name('clear_cache');
    /** Medias */
    Route::resource('album', 'Admin\Medias\AlbumController');
    Route::post('album/ajaxCreate', 'Admin\Medias\AlbumController@ajaxCreate')
            ->name('album.ajaxCreate');
    Route::resource('picture', 'Admin\Medias\PictureController');
    Route::resource('partner', 'Admin\PartnerController');
    Route::resource('testimonial', 'Admin\TestimonialController');
    Route::resource('slider', 'Admin\SliderController');
    Route::resource('contact', 'Admin\ContactController');
});

use App\Mail\Subscribe;
use Illuminate\Support\Facades\Mail;
Route::get('/email', function () {
    Mail::to('anhln.vccorp@gmail.com')->send(new Subscribe());
    return new Subscribe();
});

Route::post('/send-message', 'Admin\SubscriberController@send_message')->name('emails.send-message');

Route::group(['middleware' => []], function () {
    Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');
});
Route::get('/index.html', 'Frontend\FrontendController@index')->name('frontend.home');
Route::get('/tin-tuc.html', 'Frontend\PostColtroller@post_list')->name('post.list');
Route::get('/{slug}', 'Frontend\PostColtroller@view')->name('post.view');
Route::get('/projects/{slug}', 'Frontend\ProjectColtroller@view')->name('project.view');
