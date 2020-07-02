<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BookingController;
use App\Booking;
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
        $booking = Booking::where('user_id', $user_form->id)->where('active', 1)->first();
        $activities = Booking::where('user_id', $user_form->id)->orderBy('created_at','desc')->get();


        return view('admin.profile', ['user_form' => $user_form, 'booking' => $booking, 'activities' => $activities]);

    }

    public function todaysBooking()
    {
        $today_users = User::whereBetween('latest_booking_date_number', [Carbon::today()->format('ndHi'), Carbon::tomorrow()->format('ndHi')])->get();
        // $today_users = User::where('latest_booking_date', Carbon::today());
        return view('admin.todaysbooking', ['today_users' => $today_users]);
    }

    public function Bookings()
    {

        $query = Booking::sortable()->orderBy('updated_at','desc');
        // $cond_user = $request->cond_user;
        // $active = $request->active;
        // $start_time = $request->start_time;
        // $end_time = $request->end_time;

        // if($request->has('active')) {
        //     $query->where('active', $active);
        // }
        // if($request->has('start_time') && $request->has('end_time')) {
        //     $query->whereBetween('booking_date_number', [$start_time, $end_time]);
        // } else if($request->has('start_time')) {
        //     $query->where('booking_date_number', '>', $start_time);
        // } else if($request->has('end_time')) {
        //     $query->where('booking_date_number', '<', $end_time);
        // }


        // フリーワード
        // if($request->has('cond_user')) {
        //     $query->where(function ($query) use ($cond_user) {
        //         $query->where('family_name', 'like', $cond_user. '%')
        //         ->orWhere('first_name', 'like', $cond_user. '%')
        //         ->orWhere('kana_family_name', 'like', $cond_user. '%')
        //         ->orWhere('kana_first_name', 'like', $cond_user. '%')
        //         ->orWhere('email', 'like', $cond_user. '%')
        //         ->orWhere('phone_number', 'like', $cond_user. '%')
        //         ->orWhere('gender', 'like', $cond_user. '%');
        //     });
        // }



       $bookings = $query->paginate(5);

    $cc = count($bookings, COUNT_RECURSIVE);
        return view('admin.bookings', ['bookings' => $bookings]);
    }

    public function setting()
    {

        $today_users = User::where('latest_booking_date', Carbon::today());
        return view('admin.setting');

    }



    public function users(Request $request)
    {
        $query = User::sortable();
        $cond_user = $request->cond_user;
        $gender = $request->gender;

        //自分の書き方
        // 検索条件の値を取得


        //コメントでいただいた書き方
        //hasメソッドを使用（値が存在、かつ空ではないか）
        if($request->has('gender')) {
            $query->where('gender', 'like', '%'.$gender.'%');
        }


        // フリーワード
        if($request->has('cond_user')) {
            $query->where(function ($query) use ($cond_user) {
                $query->where('family_name', 'like', $cond_user. '%')
                ->orWhere('first_name', 'like', $cond_user. '%')
                ->orWhere('kana_family_name', 'like', $cond_user. '%')
                ->orWhere('kana_first_name', 'like', $cond_user. '%')
                ->orWhere('email', 'like', $cond_user. '%')
                ->orWhere('phone_number', 'like', $cond_user. '%')
                ->orWhere('gender', 'like', $cond_user. '%');
            });
        }



       $users = $query->paginate(2);

    $cc = count($users, COUNT_RECURSIVE);


        return view('admin.users', ['users' => $users, 'cond_user' => $cond_user, 'gender' => $gender, 'cc' => $cc]);

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
