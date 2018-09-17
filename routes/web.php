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

use App\Jobs\SendMailRecruiterJob;
use App\Jobs\SendMailUserJob;
use App\Mail\SendEmailMailable;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/','UserController@index');

Route::get('/about', function (){

    //Mail::to('sanghit101@gmail.com')->send(new SendEmailMailable());
    return view('user.about');
});

Route::get('/category','UserController@category');
Route::get('/contact','UserController@contact');
Route::get('/blog','UserController@blog');
Route::get('/search','UserController@search');
Route::get('/details/{id}','UserController@details');

Route::get('/applyJob', 'UserController@applyJob');
Route::post('/applyJob', 'UserController@applyJob');

Route::get('my-career-center/dashboard','DashboardController@index');

Route::get('/user/profile','DashboardController@user_profile');
Route::post('/user/profile','DashboardController@user_profile');
Route::get('/user/avatar','DashboardController@user_avatar');
Route::post('/user/avatar','DashboardController@user_avatar');
Route::post('/user/info','DashboardController@user_info');
Route::put('/user/contact','DashboardController@user_contact');
Route::post('/user/summary','DashboardController@user_summary');
Route::get('/user/summary','DashboardController@user_summary');
Route::get('/user/skills','DashboardController@user_skills');
Route::put('/user/skills','DashboardController@user_skills');
Route::get('/user/languages','DashboardController@user_languages');
Route::post('/user/languages','DashboardController@user_languages');
Route::put('/user/languages','DashboardController@user_languages');
Route::delete('/user/languages/{id}','DashboardController@user_delete_languages');
Route::put('/user/employment_history','DashboardController@user_employment_history');
Route::post('/user/employment_history','DashboardController@user_employment_history');
Route::delete('/user/employment_history/{id}','DashboardController@user_delete_employment_history');
Route::put('/user/working_preferences','DashboardController@user_working_preferences');
Route::get('/getT','DashboardController@getT');

Route::get('/get-database','DashboardController@get_data');
Route::get('/countries','DashboardController@get_countries_json');
Route::get('/provinces_cities','DashboardController@get_vietnam_provinces_cities_json');


Route::get('recruit/post-news','RecruitController@post_news');
Route::post('store','RecruitController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
