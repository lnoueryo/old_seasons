<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BookingController;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();

        return view('admin.user', ['users' => $users]);

    }

    public function day_block(Request $request)
    {
        $booking_controller = new BookingController;
        $booking_controller->day_time = $request->time;
        $booking_controller->save();


        return redirect('/user');

    }

    public function day_of_the_week_block(Request $request)
    {
        $booking_controller = new BookingController;
        $booking_controller->day_of_the_week = $request->day;
        $booking_controller->save();


        return redirect('/user');

    }

    public function day_unblock(Request $request)
    {
        $booking_controller = BookingController::where('day_time', $request->time);
        $booking_controller->delete();
        return redirect('/user');

    }

    public function day_of_the_week_unblock(Request $request)
    {
        $booking_controller = BookingController::where('day_of_the_week', $request->day);
        $booking_controller->delete();
        return redirect('/user');

    }
}
