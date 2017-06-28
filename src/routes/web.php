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

Route::get('/','ViewController@home');
Route::get('/about','ViewController@service');
Route::get('/portfolio','ViewController@portfolio');
Route::get('/portfolio/view/{id}','ViewController@portfolio_view');
Route::get('/contact','ViewController@contact');
Auth::routes();
Route::get('/admin', 'ViewAdminController@home');
Route::get('/admin/about', 'ViewAdminController@about');
Route::get('/admin/portfolio', 'ViewAdminController@portfolio');
Route::get('/admin/contact', 'ViewAdminController@contact');

Route::get('/admin/portfolio', 'PortfolioController@portfolio');
Route::get('/admin/portfolio/form', 'PortfolioController@portfolio_form');
Route::get('/admin/portfolio/form/{id}', 'PortfolioController@portfolio_form');
Route::post('/admin/portfolio/add', 'PortfolioController@portfolio_add');
Route::get('/admin/portfolio/image/delete/{id}', 'PortfolioController@portfolio_image_delete');
Route::get('/admin/portfolio/album/delete/{id}', 'PortfolioController@portfolio_album_delete');

Route::post('/admin/certificate/add', 'CertificateController@add');
Route::get('/admin/certificate/delete/{id}', 'CertificateController@delete');

Route::post('/admin/slide/add', 'SlideController@add');
Route::get('/admin/slide/delete/{id}', 'SlideController@delete');