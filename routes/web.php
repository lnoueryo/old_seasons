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
    return view('front.calender');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@calender')->name('home');
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::get('/concept', 'HomeController@concept')->name('concept');
Route::get('/access', 'HomeController@access')->name('access');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/calender/reservation', 'HomeController@reservation');
Route::get('/reservation_plan', 'HomeController@reservationPlan')->name('reservationPC');
Route::get('/reservation_plan_sm', 'HomeController@reservationPlanSM')->name('reservationSM');
Route::get('/policy', 'HomeController@policy')->name('policy');
Route::get('/confirmation', 'HomeController@confirmation')->name('confirmation');
Route::get('/confirmation/delete', 'HomeController@cancel');
Route::post('/reservation_date', 'HomeController@reservationDate');
Route::post('/reservation_date_sm', 'HomeController@reservationDateSM');
Route::post('/home', 'HomeController@booking');
// Route::get('/reservation_date', 'HomeController@reservationDate')->name('reservation_date');


// アドミン
Route::get('/calender', 'AdminController@calender')->name('calender');
Route::get('/todaysbooking', 'AdminController@todaysBooking')->name('todaysbooking');
Route::get('/bookings', 'AdminController@Bookings')->name('bookings');
Route::get('/users', 'AdminController@users')->name('users');
Route::get('/setting', 'AdminController@setting')->name('setting');
Route::get('/profile', 'AdminController@profile')->name('profile');
Route::get('/calender/day_time_block', 'AdminController@day_time_block');
Route::get('/calender/day_of_the_week_block', 'AdminController@day_of_the_week_block');
Route::post('/calender/day_block', 'AdminController@day_block');
Route::get('/calender/day_time_unblock', 'AdminController@day_time_unblock');
Route::get('/calender/day_of_the_week_unblock', 'AdminController@day_of_the_week_unblock');

// ログインアドミン用
Route::post('/login/custom', [
    'uses' => 'Auth\MyLoginController@login',
    'as' => 'login.custom'
    ]);
