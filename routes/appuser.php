<?php

/*
|--------------------------------------------------------------------------
| Hocvien Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::namespace('appuser')->group(function () {
    Route::get('/dang-nhap', 'Auth\LoginController@showLoginForm')->name('appuser.loginform');
    Route::post('/login', 'Auth\LoginController@login')->name('appuser.login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('appuser.logout');
    Route::post('/logout', 'Auth\LoginController@logout')->name('appuser.logout');
    Route::get('/register', 'Auth\LoginController@registerForm')->name('appuser.register');
    Route::post('/register', 'Auth\RegisterController@register')->name('appuser.register');

    Route::get('login/{provider}', 'Auth\SocialAccountController@redirectToProvider')->name('appuser.login_provider');
    Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback')->name('appuser.login.provider_callback');

    Route::get('/password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('appuser.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('appuser.password.email');
    Route::post('password/update', 'Auth\ResetPasswordController@reset')->name('appuser.password.update');
    
    Route::get('password/reset', 'Auth\ResetPasswordController@showResetForm')->name('appuser.password.token');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('appuser.password.reset');
});

Route::group(['namespace' => 'AppUser', 'middleware' => ['appuser']], function () {
    Route::get('/', 'AppUserController@profile')->name('appuser.profile');
    Route::get('/profile', 'AppUserController@profile')->name('appuser.profile');
    Route::post('/update/{id}', 'AppUserController@update')->name('appuser.update');
    Route::get('/changepassword', 'AppUserController@changepasswordform')->name('appuser.changepasswordform');
    Route::post('/changepassword/{id}', 'AppUserController@changepassword')->name('appuser.changepassword');
});
