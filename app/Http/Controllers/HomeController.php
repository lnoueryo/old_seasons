<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Events\Book;
use App\UserActivity;

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

    public function pra(Request $request)
    {
        $user_activity = new UserActivity();
        $user_activity->user_id = $request->user_id;
        $user_activity->user_activity = $request->user_activity;
        $user_activity->save();

        return redirect('/home');
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

        $user_activity = new UserActivity($request->all());
        $request->session()->put('user_activity', $user_activity);
        $times = User::where('latest_booking_date','>', Carbon::now())->get();


        return view('front.reservation_date', ['user_activity' => $user_activity, 'times' => $times]);
    }

    public function reservation(Request $request)
    {
        $booking_date_month = $request->booking_date_month;
        $booking_date_day = $request->booking_date_day;
        $booking_date_hour = $request->booking_date_hour;
        $booking_date_minute = $request->booking_date_minute;


        $user_activity = new UserActivity($request->all());
        $request->session()->put('user_activity', $user_activity);


        return view('front.reservation', ['user_activity' => $user_activity, 'booking_date_month' => $booking_date_month,
        'booking_date_day' => $booking_date_day, 'booking_date_hour' => $booking_date_hour, 'booking_date_minute' => $booking_date_minute]);


    }


    public function booking(Request $request)
    {
        $user = User::find($request->id);
        $user->phone_number = $request->phone_number;
        $user->booking_counter += 1;
        $user->last_booking_date = $user->latest_booking_date ? $user->latest_booking_date : $request->latest_booking_date;
        $user->last_booking_plan = $user->latest_booking_plan ? $user->latest_booking_plan : $request->latest_booking_plan;
        $user->latest_booking_date = $request->latest_booking_date;
        $user->latest_booking_plan = $request->latest_booking_plan;
        $user->latest_booking_date_number = $request->latest_booking_date_number;
        $user->price = $request->price;
        $user->length_of_time = $request->length_of_time;
        $user->update();

        $user_activity = new UserActivity;
        $user_activity->user_id = $request->id;
        $user_activity->price = $request->price;
        $user_activity->length_of_time = $request->length_of_time;
        $user_activity->booking_plan = $request->latest_booking_plan;
        $user_activity->booking_date = $request->latest_booking_date;

        if($request->cut != '') {
            $user_activity->cut = '〇';
        }
        if($request->perm != '') {
            $user_activity->perm = '〇';
        }
        if($request->color != '') {
            $user_activity->color = '〇';
        }
        if($request->spa != '') {
            $user_activity->spa = '〇';
        }
        if($request->treatment != '') {
            $user_activity->treatment = '〇';
        }

        $user_activity->user_activity = "予約完了";

        $user_activity->save();



        return redirect('/');

    }

    public function policy()
    {

        return view('front.policy');

    }

    public function confirmation()
    {

        return view('front.confirmation');

    }

    public function cancel(Request $request)
    {
        $user = User::find(Auth::user())->first();

        $user_activity = new UserActivity;
        $user_activity->user_activity = 'キャンセル';
        $user_activity->user_id = Auth::user()->id;
        $user_activity->booking_date = $user->latest_booking_date;
        $user_activity->length_of_time = $user->length_of_time;
        $user_activity->booking_plan = $user->latest_booking_plan;
        $user_activity->booking_plan = $user->latest_booking_plan;
        $user_activity->price = $user->price;



        $user->latest_booking_date = $request->latest_booking_date;
        $user->latest_booking_date_number = $request->latest_booking_date_number;
        $user->latest_booking_plan = $request->latest_booking_plan;
        $user->price = $request->price;
        $user->length_of_time = $request->length_of_time;
        $user->save();
        $user_activity->save();

        return redirect('/');

    }

    public function newCalender()
    {

        return view('new.newcalender');

    }

    public function newConcept()
    {

        return view('new.new_concept');

    }

    public function newReservationPlan()
    {

        return view('new.reservation_plan');

    }

    public function newReservationDate()
    {

        return view('new.reservation_date');

    }

    public function newReservation(Request $request)
    {
        $user1 = $request->time;
        return view('new.new_reservation', ['user1' => $user1]);

    }



    public function practice()
    {

        return view('new.new_reservation', ['user1' => $user1]);

    }
}
