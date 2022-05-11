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

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\MainController@about');
Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');
Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');
Route::get('/details-news/{id}', 'App\Http\Controllers\MainController@details_news')->name('details');



Route::get('/admin', 'App\Http\Controllers\AdminController@admin')->name('admin');
Route::get('/admin/{id}', 'App\Http\Controllers\AdminController@show_news')->name('show_news');
Route::get('/admin/{id}/update', 'App\Http\Controllers\AdminController@update_news')->name('update_news');
Route::post('/admin/check', 'App\Http\Controllers\AdminController@admin_check')->name('admin_check');

Route::post('/admin/{id}/update', 'App\Http\Controllers\AdminController@update_news_submit')->name('update_news_submit');
Route::get('/admin/{id}/delete', 'App\Http\Controllers\AdminController@destroy')->name('delete_news');

//Route::post('/admin/upload-image', 'App\Http\Controllers\AdminController@upload_image')->name('upload_image');



//Route::post('admin/{id}','App\Http\Controllers\AdminController@destroy');

