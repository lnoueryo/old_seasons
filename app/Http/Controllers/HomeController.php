<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Events\Book;
use App\Booking;
use App\Blog;
use App\BookingController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();

        return view('front.home', ['users' => $users]);
    }

    // public function calender()
    // {

    //     return view('front.calender');
    // }

    public function calenderOld()
    {

        $json = Booking::where('active', 1)->get(['booking_date_number','length_of_time']);
        $json2 = BookingController::all('day_of_the_week');
        $json3 = BookingController::all('day_time');
        $dateArray = Array();
        for($i=1; $i<=14; $i++){
            $dateArray[] = array('date' => Carbon::today()->addDays($i-1)->format('d日'), 'date2' => Carbon::today()->addDays($i-1)->isoformat("(ddd)"));
        }
        if(Auth::check()) {
            $user = Auth::user();
            $user_booking = Booking::where('user_id', $user->id)->where('booking_date_number', $user->latest_booking_date_number)->where('active', 1)->first();
            if(null !== $user_booking && $user_booking->booking_date_number > Carbon::now()->format("ndHi")) {
                $btn = 0;
            } else {
                $btn = 1;
            }
        } else {
            $user_booking = null;
            $btn = 2;
        }

        return view('front.calender_old', ['json' => $json, 'json2' => $json2, 'json3' => $json3, 'dateArray' => $dateArray, 'user_booking' => $user_booking, 'btn' => $btn]);


    }

    public function Ajax()
    {
        $items = Booking::all();
        return response()->json($items);
    }
    public function JSCalender()
    {
        $current_booking = Booking::where('active', 1)->get(['booking_date_number','length_of_time']);
        $day_of_the_week = BookingController::all('day_of_the_week');
        $day_time = BookingController::all('day_time');
        $days = BookingController::find(1)->day;
        $hour_from_now = Carbon::now()->addHours(1)->format("ndHi");
        $dateArray = Array();
        for ($j=0; $j<=18; $j++) {
            for ($i=1; $i<=14; $i++) {
                $date_number[] = Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("ndHi");
                $day[] = Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("N");
                $date_of_the_week1[] = Carbon::today()->addDays($i-1)->format("N");
                $dateArray_chunk = array_chunk($date_number,14);
                $dateArray_chunk2 = array_chunk($date_of_the_week1,14);
            }
            $date1[] = "date";
            $dateArray2 = array_combine($date1, $dateArray_chunk);
            $date_time[] = Carbon::today()->addHours(10)->addMinutes(30 * $j)->format("H:i");
            $time1[] = "time";
            $dateArray3 = array_combine($time1, $date_time);
            $day1[] = "day";
            $dateArray4 = array_combine($day1, $dateArray_chunk2);
            $dateArray5[] = array_merge($dateArray2, $dateArray3, $dateArray4);
            $dateArray = $dateArray5;
        }
        $dateArray2 = Array();
        for($i=1; $i<=14; $i++){
            $dateArray2[] = array('date' => Carbon::today()->addDays($i-1)->format('d日'), 'date2' => Carbon::today()->addDays($i-1)->isoformat("(ddd)"));
        }

        return view('front.JS_calender', ['dateArray' => $dateArray, 'current_booking' => $current_booking, 'day_of_the_week' => $day_of_the_week,
        'day_time' => $day_time, 'days' => $days, 'day' => $day, 'hour_from_now' => $hour_from_now, 'dateArray2' => $dateArray2, 'date_number' => $date_number]);
    }
    public function calender()
    {
        $current_booking = Booking::where('active', 1)->get(['booking_date_number','length_of_time']);
        $day_of_the_week = BookingController::all('day_of_the_week');
        $day_time = BookingController::all('day_time');
        $days = BookingController::find(1)->day;
        $hour_from_now = Carbon::now()->addHours(1)->format("ndHi");
        $dateArray = Array();
        for ($j=0; $j<=18; $j++) {
            for ($i=1; $i<=14; $i++) {
                $date_number[] = Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("ndHi");
                $day[] = Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("N");
                $date_of_the_week1[] = Carbon::today()->addDays($i-1)->format("N");
                $dateArray_chunk = array_chunk($date_number,14);
                $dateArray_chunk2 = array_chunk($date_of_the_week1,14);
            }
            $date1[] = "date";
            $dateArray2 = array_combine($date1, $dateArray_chunk);
            $date_time[] = Carbon::today()->addHours(10)->addMinutes(30 * $j)->format("H:i");
            $time1[] = "time";
            $dateArray3 = array_combine($time1, $date_time);
            $day1[] = "day";
            $dateArray4 = array_combine($day1, $dateArray_chunk2);
            $dateArray5[] = array_merge($dateArray2, $dateArray3, $dateArray4);
            $dateArray = $dateArray5;
        }
        $dateArray2 = Array();
        for($i=1; $i<=14; $i++){
            $dateArray2[] = array('date' => Carbon::today()->addDays($i-1)->format('d日'), 'date2' => Carbon::today()->addDays($i-1)->isoformat("(ddd)"));
        }
        if(Auth::check()) {
            $user = Auth::user();
            $user_booking = Booking::where('user_id', $user->id)->where('booking_date_number', $user->latest_booking_date_number)->where('active', 1)->first();
            if(null !== $user_booking && $user_booking->booking_date_number > Carbon::now()->format("ndHi")) {
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
    }

    public function menu()
    {
        return view('front.menu');

    }

    public function concept()
    {
        return view('front.concept');

    }

    public function access()
    {
        return view('front.access');

    }

    public function contact()
    {
        return view('front.contact');

    }

    public function ReservationPlan() {

        return view('front.reservation_plan');
    }

    public function ReservationPlanSM() {

        return view('front.reservation_plan_sm');
    }

    public function reservationDate(Request $request) {
        $current_booking = Booking::where('active', 1)->get(['booking_date_number','length_of_time']);
        $day_of_the_week = BookingController::all('day_of_the_week');
        $day_time = BookingController::all('day_time');
        $days = BookingController::find(1)->day;
        $hour_from_now = Carbon::now()->addHours(1)->format("ndHi");
        $dateArray = Array();
        for ($j=0; $j<=18; $j++) {
            for ($i=1; $i<=14; $i++) {
                $date_number[] = Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("ndHi");
                $day[] = Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("N");
                $date_of_the_week1[] = Carbon::today()->addDays($i-1)->format("N");
                $dateArray_chunk = array_chunk($date_number,14);
                $dateArray_chunk2 = array_chunk($date_of_the_week1,14);
            }
            $date1[] = "date";
            $dateArray2 = array_combine($date1, $dateArray_chunk);
            $date_time[] = Carbon::today()->addHours(10)->addMinutes(30 * $j)->format("H:i");
            $time1[] = "time";
            $dateArray3 = array_combine($time1, $date_time);
            $day1[] = "day";
            $dateArray4 = array_combine($day1, $dateArray_chunk2);
            $dateArray5[] = array_merge($dateArray2, $dateArray3, $dateArray4);
            $dateArray = $dateArray5;
        }
        $dateArray6 = Array();
        for($i=1; $i<=14; $i++){
            $dateArray6[] = array('date' => Carbon::today()->addDays($i-1)->format('d日'), 'date2' => Carbon::today()->addDays($i-1)->isoformat("(ddd)"));
        }
        $booking = new Booking($request->all());
        $request->session()->put('booking', $booking);
        $user = Auth::user();
        $user_booking = Booking::where('user_id', $user->id)->where('booking_date_number', $user->latest_booking_date_number)->where('active', 1)->first();

        return view('front.reservation_date', ['dateArray' => $dateArray, 'current_booking' => $current_booking, 'day_of_the_week' => $day_of_the_week,
        'day_time' => $day_time, 'days' => $days, 'day' => $day, 'hour_from_now' => $hour_from_now, 'dateArray6' => $dateArray6, 'date_number' => $date_number,
         'booking' => $booking, 'user_booking' => $user_booking, 'dateArray' => $dateArray]);
    }

    public function reservationDateSM(Request $request) {
        $current_booking = Booking::where('active', 1)->get(['booking_date_number','length_of_time']);
        $day_of_the_week = BookingController::all('day_of_the_week');
        $day_time = BookingController::all('day_time');
        $days = BookingController::find(1)->day;
        $hour_from_now = Carbon::now()->addHours(1)->format("ndHi");
        $dateArray = Array();
        for ($j=0; $j<=18; $j++) {
            for ($i=1; $i<=14; $i++) {
                $date_number[] = Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("ndHi");
                $day[] = Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30 * $j)->format("N");
                $date_of_the_week1[] = Carbon::today()->addDays($i-1)->format("N");
                $dateArray_chunk = array_chunk($date_number,14);
                $dateArray_chunk2 = array_chunk($date_of_the_week1,14);
            }
            $date1[] = "date";
            $dateArray2 = array_combine($date1, $dateArray_chunk);
            $date_time[] = Carbon::today()->addHours(10)->addMinutes(30 * $j)->format("H:i");
            $time1[] = "time";
            $dateArray3 = array_combine($time1, $date_time);
            $day1[] = "day";
            $dateArray4 = array_combine($day1, $dateArray_chunk2);
            $dateArray5[] = array_merge($dateArray2, $dateArray3, $dateArray4);
            $dateArray = $dateArray5;
        }
        $dateArray6 = Array();
        for($i=1; $i<=14; $i++){
            $dateArray6[] = array('date' => Carbon::today()->addDays($i-1)->format('d日'), 'date2' => Carbon::today()->addDays($i-1)->isoformat("(ddd)"));
        }
        $booking = new Booking($request->all());
        $request->session()->put('booking', $booking);
        $user = Auth::user();
        $user_booking = Booking::where('user_id', $user->id)->where('booking_date_number', $user->latest_booking_date_number)->where('active', 1)->first();

        return view('front.reservation_date', ['dateArray' => $dateArray, 'current_booking' => $current_booking, 'day_of_the_week' => $day_of_the_week,
        'day_time' => $day_time, 'days' => $days, 'day' => $day, 'hour_from_now' => $hour_from_now, 'dateArray6' => $dateArray6, 'date_number' => $date_number,
         'booking' => $booking, 'user_booking' => $user_booking, 'dateArray' => $dateArray]);
    }

    public function reservation(Request $request)
    {
        $booking_date_month = $request->booking_date_month;
        $booking_date_day = $request->booking_date_day;
        $booking_date_hour = $request->booking_date_hour;
        $booking_date_minute = $request->booking_date_minute;
        $booking_date = $request->booking_date;


        $booking = new Booking($request->all());
        $request->session()->put('booking', $booking);


        return view('front.reservation', ['booking' => $booking, 'booking_date_month' => $booking_date_month,
        'booking_date_day' => $booking_date_day, 'booking_date_hour' => $booking_date_hour, 'booking_date_minute' => $booking_date_minute, 'booking_date' => $booking_date]);


    }


    public function booking(Request $request)
    {

        // $user->last_booking_date = $user->latest_booking_date ? $user->latest_booking_date : $request->latest_booking_date;
        // $user->last_booking_plan = $user->latest_booking_plan ? $user->latest_booking_plan : $request->latest_booking_plan;
        // $user->latest_booking_date = $request->latest_booking_date;
        // $user->latest_booking_plan = $request->latest_booking_plan;
        // $user->price = $request->price;


            $user = User::find($request->id);
            $user->phone_number = $request->phone_number;
            $user->booking_counter += 1;
            $user->latest_booking_date_number = $request->latest_booking_date_number;
            $user->update();

            $booking = new Booking;
            $booking->user_id = $request->id;
            $booking->price = $request->price;
            $booking->length_of_time = $request->length_of_time;
            $booking->booking_plan = $request->latest_booking_plan;
            $booking->booking_date = $request->latest_booking_date;
            $booking->booking_date_number = $request->latest_booking_date_number;
            $booking->save();
            return redirect('/');




    }

    public function policy()
    {

        return view('front.policy');

    }

    public function confirmation()
    {
        $booking = Booking::where('user_id', Auth::user()->id)->where('active', 1)->where('booking_date_number', '>', Carbon::now()->format('ndHi'))->first();
        return view('front.confirmation', (['booking' => $booking]));

    }

    public function cancel(Request $request)
    {
        $user = User::find(Auth::user())->first();

        $booking = Booking::where('user_id', $user->id)->where('booking_date_number', $user->latest_booking_date_number)->where('active', 1)->first();
        $booking->active = 0;
        $booking->save();

        return redirect('/');

    }

    public function blog(Request $request)
  {
    $posts = Blog::all()->sortByDesc('updated_at');

    if (count($posts) > 0) {
        $headline = $posts->shift();
    } else {
        $headline = null;
    }

    return view('front.blog', ['headline' => $headline, 'posts' => $posts]);
  }


}
