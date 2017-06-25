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
Route::get('/service','ViewController@service');
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

Route::get('/admin/home', 'HomeController@home');
Route::get('/admin/home/form', 'HomeController@home_form');
Route::get('/admin/home/form/{id}', 'HomeController@home_form');
Route::post('/admin/home/add', 'HomeController@home_add');
Route::get('/admin/home/image/delete/{id}', 'HomeController@home_image_delete');
Route::get('/admin/home/album/delete/{id}', 'HomeController@home_album_delete');

Route::post('/admin/certificate/add', 'CertificateController@add');
Route::get('/admin/certificate/delete/{id}', 'CertificateController@delete');
