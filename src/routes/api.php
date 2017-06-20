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

Route::get('/portfolio', 'PortfolioController@portfolio');
Route::get('/portfolio/form', 'PortfolioController@portfolio_form');
Route::get('/portfolio/form/{id}', 'PortfolioController@portfolio_form');
Route::post('/portfolio/add', 'PortfolioController@portfolio_add');
Route::get('/portfolio/image/delete/{id}', 'PortfolioController@portfolio_image_delete');
Route::get('/portfolio/album/delete/{id}', 'PortfolioController@portfolio_album_delete');
