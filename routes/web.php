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
//     return view('auth.login');
// });
Route::get('/', function () {
    return view('front.newcalender');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@calender');
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::get('/concept', 'HomeController@concept')->name('concept');
Route::get('/access', 'HomeController@access')->name('access');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/calender/reservation', 'HomeController@reservation');
Route::get('/policy', 'HomeController@policy')->name('policy');
Route::get('/confirmation', 'HomeController@confirmation')->name('confirmation');
Route::get('/confirmation/delete', 'HomeController@cancel');
Route::post('/home', 'HomeController@booking');


Route::get('/newcalender', 'HomeController@newCalender')->name('home');
Route::get('/new_concept', 'HomeController@newConcept')->name('concept');


Route::get('/calender', 'AdminController@calender')->name('calender');
Route::get('/bookings', 'AdminController@bookings')->name('bookings');
Route::get('/users', 'AdminController@users')->name('users');
Route::get('/setting', 'AdminController@setting')->name('setting');
Route::get('/profile', 'AdminController@profile')->name('profile');
Route::get('/calender/day_time_block', 'AdminController@day_time_block');
Route::get('/calender/day_of_the_week_block', 'AdminController@day_of_the_week_block');
Route::post('/calender/day_block', 'AdminController@day_block');
Route::get('/calender/day_time_unblock', 'AdminController@day_time_unblock');
Route::get('/calender/day_of_the_week_unblock', 'AdminController@day_of_the_week_unblock');
// Route::get('/calender/unblock_all', 'AdminController@unblock_all');
Route::post('/login/custom', [
    'uses' => 'Auth\MyLoginController@login',
    'as' => 'login.custom'
    ]);
