<?php

use Illuminate\Support\Facades\Route;

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
//Frontend
Route::get('/', 'HomeController@index' );
Route::get('/trangchu', 'HomeController@index' );

//Backend
Route::get('/admin', 'AdminController@index' );
Route::get('/dashboard', 'AdminController@show_dashboard' );
Route::get('/logout', 'AdminController@logout' );
Route::post('/admin-dashboard', 'AdminController@dashboard' );

//Category
Route::get('/add-category', 'CategoryProduct@add_cat');
Route::get('/all-category', 'CategoryProduct@all_cat');

Route::get('/unactive-category/{id}', 'CategoryProduct@unactive_cat');
Route::get('/active-category/{id}', 'CategoryProduct@active_cat');

Route::get('/edit-category/{id}', 'CategoryProduct@edit_cat');
Route::get('/del-category/{id}', 'CategoryProduct@del_cat');

Route::post('/save-category', 'CategoryProduct@save_cat');
Route::post('/update-category/{id}', 'CategoryProduct@upd_cat');

//Brand
Route::get('/add-brand', 'BrandProduct@add_brand');
Route::get('/all-brand', 'BrandProduct@all_brand');

Route::get('/unactive-brand/{id}', 'BrandProduct@unactive_brand');
Route::get('/active-brand/{id}', 'BrandProduct@active_brand');

Route::get('/edit-brand/{id}', 'BrandProduct@edit_brand');
Route::get('/del-brand/{id}', 'BrandProduct@del_brand');

Route::post('/save-brand', 'BrandProduct@save_brand');
Route::post('/update-brand/{id}', 'BrandProduct@upd_brand');

//Product
Route::get('/add-pro', 'Product@add_pro');
Route::get('/all-pro', 'Product@all_pro');

Route::get('/unactive-pro/{id}', 'Product@unactive_pro');
Route::get('/active-pro/{id}', 'Product@active_pro');

Route::get('/edit-pro/{id}', 'Product@edit_pro');
Route::get('/del-pro/{id}', 'Product@del_pro');

Route::post('/save-pro', 'Product@save_pro');
Route::post('/update-pro/{id}', 'Product@upd_pro');
