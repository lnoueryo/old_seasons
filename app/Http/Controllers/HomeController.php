<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Events\Book;
use App\Booking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function calender()
    {
        return view('front.calender');
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

        $booking = new Booking($request->all());
        $request->session()->put('booking', $booking);
        $times = Booking::where('booking_date','>', Carbon::now())->get();


        return view('front.reservation_date', ['booking' => $booking, 'times' => $times]);
    }

    public function reservationDateSM(Request $request) {

        $booking = new Booking($request->all());
        $request->session()->put('booking', $booking);
        $times = Booking::where('booking_date','>', Carbon::now())->get();


        return view('front.reservation_date_sm', ['booking' => $booking, 'times' => $times]);
    }

    public function reservation(Request $request)
    {
        $booking_date_month = $request->booking_date_month;
        $booking_date_day = $request->booking_date_day;
        $booking_date_hour = $request->booking_date_hour;
        $booking_date_minute = $request->booking_date_minute;


        $booking = new Booking($request->all());
        $request->session()->put('booking', $booking);


        return view('front.reservation', ['booking' => $booking, 'booking_date_month' => $booking_date_month,
        'booking_date_day' => $booking_date_day, 'booking_date_hour' => $booking_date_hour, 'booking_date_minute' => $booking_date_minute]);


    }


    public function booking(Request $request)
    {
        $user = User::find($request->id);
        $user->phone_number = $request->phone_number;
        $user->booking_counter += 1;
        // $user->last_booking_date = $user->latest_booking_date ? $user->latest_booking_date : $request->latest_booking_date;
        // $user->last_booking_plan = $user->latest_booking_plan ? $user->latest_booking_plan : $request->latest_booking_plan;
        // $user->latest_booking_date = $request->latest_booking_date;
        // $user->latest_booking_plan = $request->latest_booking_plan;
        $user->latest_booking_date_number = $request->latest_booking_date_number;
        // $user->price = $request->price;
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
        $booking = Booking::where('user_id', Auth::user()->id)->first();

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


}
