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
Route::get('/search/{string}', 'HomeController@search');

Route::get('/danh-muc-san-pham/{category_id}','CategoryProduct@show_cat_home');
Route::get('/thuong-hieu/{brand_id}','BrandProduct@show_bra_home');
Route::get('/sanpham/{product_id}','Product@product_detail');

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

//Cart
Route::post('/save-cart', 'CartController@save_cart');
Route::post('/update-cart', 'CartController@update_cart');
Route::get('/show_cart', 'CartController@show_cart');
Route::get('/del-item/{rowId}', 'CartController@del_item');
Route::get('/del-cart', 'CartController@del_cart');
Route::get('/checkout', 'CartController@checkout');
Route::post('/buyout', 'CartController@buyout');

//Order
Route::get('/all-order', 'CartController@all_order');
Route::get('/stt-order/{id}/{stt}', 'CartController@stt_order');

//Admin_user
Route::get('/add-user', 'AdminController@add_user');
Route::get('/all-user', 'AdminController@all_user');
Route::post('/save-user', 'AdminController@save_user');
Route::get('/del-user/{id}', 'AdminController@del_user');
