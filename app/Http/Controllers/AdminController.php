<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BookingController;

class AdminController extends Controller
{
    public function user()
    {

        $days = [BookingController::find(1)->day];
        $users = User::all();
        return view('admin.user', ['users' => $users, 'days' => $days]);

    }

    public function profile(Request $request)
    {

        $user_form = User::find($request->id);

        return view('admin.profile', ['user_form' => $user_form]);

    }

    public function day_time_block(Request $request)
    {
        $booking_controller = new BookingController;
        $booking_controller->day_time = $request->day_time;
        $booking_controller->save();


        return redirect('/user');

    }

    public function day_of_the_week_block(Request $request)
    {
        $booking_controller = new BookingController;
        $booking_controller->day_of_the_week = $request->day_of_the_week;
        $booking_controller->save();


        return redirect('/user');

    }

    public function day_block(Request $request)
    {
        $booking_controller = BookingController::find(1);
        $days = $_POST["day"];
        $days = join(",", $days);
        $booking_controller->day = $days;
        $booking_controller->movie = $request->movie;
        $booking_controller->update();

        return redirect('/user');

    }

    public function day_time_unblock(Request $request)
    {
        $booking_controller = BookingController::where('day_time', $request->day_time);
        $booking_controller->delete();
        return redirect('/user');

    }

    public function day_of_the_week_unblock(Request $request)
    {
        $booking_controller = BookingController::where('day_of_the_week', $request->day_of_the_week);
        $booking_controller->delete();
        return redirect('/user');

    }
}
