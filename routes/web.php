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
        $current_booking = App\Booking::where('active', 1)->get(['booking_date_number','length_of_time']);
        $day_of_the_week = App\BookingController::all('day_of_the_week');
        $day_time = App\BookingController::all('day_time');
        $days = App\BookingController::find(1)->day;
        $hour_from_now = Carbon\Carbon::now()->addHours(1)->format("ndHi");
        $dateArray = Array();
        for ($j=0; $j<=18; $j++) {
            for ($i=1; $i<=14; $i++) {
                $date_number[] = Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("ndHi");
                $day[] = Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("N");
                $date_of_the_week1[] = Carbon\Carbon::today()->addDays($i-1)->format("N");
                $dateArray_chunk = array_chunk($date_number,14);
                $dateArray_chunk2 = array_chunk($date_of_the_week1,14);
            }
            $date1[] = "date";
            $dateArray2 = array_combine($date1, $dateArray_chunk);
            $date_time[] = Carbon\Carbon::today()->addHours(10)->addMinutes(30 * $j)->format("H:i");
            $time1[] = "time";
            $dateArray3 = array_combine($time1, $date_time);
            $day1[] = "day";
            $dateArray4 = array_combine($day1, $dateArray_chunk2);
            $dateArray5[] = array_merge($dateArray2, $dateArray3, $dateArray4);
            $dateArray = $dateArray5;
        }
        $dateArray2 = Array();
        for($i=1; $i<=14; $i++){
            $dateArray2[] = array('date' => Carbon\Carbon::today()->addDays($i-1)->format('d日'), 'date2' => Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)"));
        }
        if(Auth::check()) {
            $user = Auth::user();
            $user_booking = App\Booking::where('user_id', $user->id)->where('booking_date_number', $user->latest_booking_date_number)->where('active', 1)->first();
            if(null !== $user_booking && $user_booking->booking_date_number > Carbon\Carbon::now()->format("ndHi")) {
                $btn = 0;
            } else {
                $btn = 1;
            }
        } else {
            $user_booking = null;
            $btn = 2;
        }

        return view('front.calender', ['dateArray' => $dateArray, 'current_booking' => $current_booking, 'day_of_the_week' => $day_of_the_week,
        'day_time' => $day_time, 'days' => $days, 'day' => $day, 'hour_from_now' => $hour_from_now, 'btn' => $btn, 'dateArray2' => $dateArray2, 'date_number' => $date_number]);

});

Auth::routes();

Route::get('/home', 'HomeController@calender')->name('home');
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::get('/concept', 'HomeController@concept')->name('concept');
Route::get('/access', 'HomeController@access')->name('access');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/calender/reservation', 'HomeController@reservation')->middleware('auth')->name('bk');
Route::get('/reservation_plan', 'HomeController@reservationPlan')->middleware('auth')->name('reservationPC');
Route::get('/reservation_plan_sm', 'HomeController@reservationPlanSM')->middleware('auth')->name('reservationSM');
Route::get('/policy', 'HomeController@policy')->name('policy');
Route::get('/confirmation', 'HomeController@confirmation')->name('confirmation');
Route::get('/confirmation/delete', 'HomeController@cancel');
Route::get('/reservation_date', 'HomeController@reservationDate')->name('reservationDate');
Route::get('/reservation_date_sm', 'HomeController@reservationDateSM');
Route::post('/home', 'HomeController@booking');
Route::get('/blog', 'HomeController@blog')->name('blog');



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
Route::get('create/blog', 'AdminController@add')->name('admin-blog');
Route::post('create/blog', 'AdminController@create');

// ログインアドミン用
Route::post('/login/custom', [
    'uses' => 'Auth\MyLoginController@login',
    'as' => 'login.custom'
    ]);


    Route::get('/JS_calender', 'HomeController@JSCalender')->name('JS');
    Route::get('/JS_calenderPR', 'HomeController@JSCalenderPR')->name('JSPR');
    Route::get('Ajax/calender', 'HomeController@Ajax');
