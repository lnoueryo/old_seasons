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

    public function reservation(Request $request)
    {
        $user1 = $request->time;
        // $user = User::find(Auth::user()->id);
        // $user->latest_booking_date = $request->time;
        // $user->save();


        return view('front.reservation', ['user1' => $user1]);
        // 失敗A
        // $id = $request->session()->get('time1');
        // if (Session::has($id)) {
        //     if($id = $request->input('time')){
        //         return direct('/home');
        //     }
        // } else {
        //     $request->session()->put('time1',$request->input('time'));
        //     return view('front.reservation', ['user' => $user, 'id' => $id]);
        // }

        // $request->session()->put('time1',$request->input('time'));

        // $id = Session::get('id');
        // 失敗2
        // $time1 = Session::get('time1', $request->input('time'));
        // if (Session::has($time1)) {
        //     if ($time1 == $request->input('time')) {
        //         return direct('/home');
        //     }
        // } else {
        //     $request->session()->put('time1', $request->input('time'));
        //     return view('front.reservation', ['user' => $user, 'time1' => $time1]);
        // }
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
        $user->save();

        $user_activity = new UserActivity;
        $user_activity->user_id = $user->id;
        $user_activity->user_activity = "予約完了";
        $user_activity->save();



        return redirect('/home');

    }

    public function policy()
    {

        return view('front.policy');

    }

    public function confirmation()
    {

        return view('front.confirmation');

    }

    public function cancel()
    {

        $user = User::find(Auth::user()->id);
        $user->latest_booking_date = '';
        $user->latest_booking_plan = '';
        $user->save();
        return redirect('/');

    }

    public function newCalender()
    {

        return view('front.newcalender');

    }


}
