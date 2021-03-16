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
