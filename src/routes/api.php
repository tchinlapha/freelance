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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/config', 'Api\HomeController@lists');
Route::patch('/config', 'Api\HomeController@update');

Route::get('/about', 'Api\AboutController@lists');
Route::patch('/about', 'Api\AboutController@update');

Route::get('/contact', 'Api\ContactController@lists');
Route::post('/contact', 'Api\ContactController@add');
Route::delete('/contact/{id}', 'Api\ContactController@delete');
