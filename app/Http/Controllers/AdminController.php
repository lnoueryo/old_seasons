<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BookingController;
use App\UserActivity;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function calender()
    {

        $days = [BookingController::find(1)->day];
        $users = User::all();
        return view('admin.calender', ['users' => $users, 'days' => $days]);

    }

    public function profile(Request $request)
    {

        $user_form = User::find($request->id);
        $user_activities = UserActivity::where('user_id', $user_form->id)->orderBy('created_at','desc')->take(10)->get();

        return view('admin.profile', ['user_form' => $user_form, 'user_activities' => $user_activities]);

    }

    public function bookings()
    {

        $today_users = User::where('latest_booking_date', Carbon::today());
        return view('admin.bookings', ['today_users' => $today_users]);

    }

    public function setting()
    {

        $today_users = User::where('latest_booking_date', Carbon::today());
        return view('admin.setting');

    }

    public function users(Request $request)
    {
        $cond_user = $request->cond_user;
        if($cond_user !='') {
            $users = User::sortable()->
                        where(function ($query) use ($cond_user) {
                            $query->where('family_name', 'like', $cond_user. '%')
                            ->orWhere('first_name', 'like', $cond_user. '%')
                            ->orWhere('kana_family_name', 'like', $cond_user. '%')
                            ->orWhere('kana_first_name', 'like', $cond_user. '%')
                            ->orWhere('email', 'like', $cond_user. '%')
                            ->orWhere('phone_number', 'like', $cond_user. '%')
                            ->orWhere('gender', 'like', $cond_user. '%');
                        })
                        ->get();
        } else {
            //     $cond_user = $request->cond_user;
    //     $cond_user_country = $request->cond_user_country;
    //     $cond_user_gender = $request->cond_user_gender;

    //     if ($cond_user != '') {

    //         if ($cond_user_country !='') {

    //             if ($cond_user_gender !='') {
    //                 $userPosts = User::sortable()->where('country', $cond_user_country)->
    //                     where('gender', $cond_user_gender)->
    //                     where(function ($query) use ($cond_user) {
    //                         $query->where('name', 'like', '%' .$cond_user. '%')
    //                         ->orWhere('email', 'like', $cond_user. '%')
    //                         ->orWhere('nickname', 'like', $cond_user. '%');
    //                     })->get();

    //                 } else {
    //                     $userPosts = User::sortable()->where('country', $cond_user_country)->
    //                         where(function ($query) use ($cond_user) {
    //                             $query->where('name', 'like', '%' .$cond_user. '%')
    //                             ->orWhere('email', 'like', $cond_user. '%')
    //                             ->orWhere('nickname', 'like', $cond_user. '%');
    //                         })->get();
    //                 }
    //             }

    //         if ($cond_user_country =='') {

    //             if ($cond_user_gender !='') {
    //                 $userPosts = User::sortable()->
    //                     where('gender', $cond_user_gender)->
    //                     where(function ($query) use ($cond_user) {
    //                         $query->where('name', 'like', '%' .$cond_user. '%')
    //                         ->orWhere('email', 'like', $cond_user. '%')
    //                         ->orWhere('nickname', 'like', $cond_user. '%');
    //                     })->get();

    //                 } else {
    //                     $userPosts = User::sortable()->where('country', $cond_user_country)->
    //                         where(function ($query) use ($cond_user) {
    //                             $query->where('name', 'like', '%' .$cond_user. '%')
    //                             ->orWhere('email', 'like', $cond_user. '%')
    //                             ->orWhere('nickname', 'like', $cond_user. '%');
    //                         })->get();
    //                 }
    //             }




    //     }

    //     if ($cond_user == '') {

    //         if ($cond_user_country !='') {

    //             if ($cond_user_gender !='') {
    //                 $userPosts = User::sortable()->where('country', $cond_user_country)->
    //                 where('gender', $cond_user_gender)->
    //                 get();

    //             } else {
    //                 $userPosts = User::sortable()->where('country', $cond_user_country)->
    //                     get();
    //             }
    //         }

    //         if ($cond_user_country =='') {

    //             if ($cond_user_gender !='') {
    //                 $userPosts = User::sortable()->
    //                 where('gender', $cond_user_gender)->
    //                 get();

    //             } else {
    //                 $userPosts = User::sortable()->
    //                     get();
    //             }
    //         }
    // }

    $users = User::sortable()->get();
        }
    $cc = count($users, COUNT_RECURSIVE);


        return view('admin.users', ['users' => $users, 'cond_user' => $cond_user, 'cc' => $cc]);

    }

    public function day_time_block(Request $request)
    {
        $booking_controller = new BookingController;
        $booking_controller->day_time = $request->day_time;
        $booking_controller->save();


        return redirect('/calender');

    }

    public function day_of_the_week_block(Request $request)
    {
        $booking_controller = new BookingController;
        $booking_controller->day_of_the_week = $request->day_of_the_week;
        $booking_controller->save();


        return redirect('/calender');

    }

    public function day_block(Request $request)
    {
        $booking_controller = BookingController::find(1);
        if($request->day !=''){
            $days = $_POST["day"];
            $days = join(",", $days);
            $booking_controller->day = $days;
            $booking_controller->movie = $request->movie;
            $booking_controller->update();
        }else{
            $booking_controller->day = '';
            $booking_controller->save();
        }


        return redirect('/calender');

    }

    public function day_time_unblock(Request $request)
    {
        $booking_controller = BookingController::where('day_time', $request->day_time);
        $booking_controller->delete();
        return redirect('/calender');

    }

    public function day_of_the_week_unblock(Request $request)
    {
        $booking_controller = BookingController::where('day_of_the_week', $request->day_of_the_week);
        $booking_controller->delete();
        return redirect('/calender');

    }
    // public function unblock_all()
    // {
    //     $booking_controllers = BookingController::all()->diff(BookingController::whereIn('id', [1]))->first();
    //     $booking_controllers = BookingController::all();
    //     $booking_controller = $booking_controllers->diff(BookingController::whereIn('id', [1]));

    //     $booking_controllers = BookingController::diff(BookingController::whereIn('id', [1]));
    //     BookingController::all();
    //     $booking_controllers->delete();
    //     return redirect('/calender');

    // }
}
