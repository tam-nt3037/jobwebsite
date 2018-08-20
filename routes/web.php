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

// Route::get('/', function () {
//     //return view('welcome');
//     return view('Home.index');
// });

Route::get('/','UserController@index');
Route::get('/about','UserController@about');
Route::get('/category','UserController@category');
Route::get('/contact','UserController@contact');
Route::get('/blog','UserController@blog');
Route::get('/search','UserController@search');
Route::get('/details/{id}','UserController@details');

Route::post('/applyJob','UserController@applyJob');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
