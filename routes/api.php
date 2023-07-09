<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => ['cors'],
], function () {
    Route::post('signup', 'Api\AuthController@signup');
    Route::post('login', 'Api\AuthController@login');

    Route::group(['middleware' => ['auth:api'], 'prefix' => 'user',], function () {
        Route::get('/', 'Api\AuthController@user');
        Route::post('logout', 'Api\AuthController@logout');
    });
});


