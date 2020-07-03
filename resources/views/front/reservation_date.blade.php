
@extends('layouts.front3')

@section('content')
<link href="{{ asset('css/PC/reservation_date.css') }}" rel="stylesheet">
    <style>

        .disabled {
            pointer-events: none;
            color: black;
        }

        @media and screen(max-width: 800px){


        }

    </style>
{{--  date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30+$booking->length_of_time)->format("mjHi")  --}}
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <form id="sp-form-1" action="{{ action('HomeController@reservation') }}" method="POST" name="Form">
                {{ csrf_field() }}
                <table id="booking-calender" class="table table-responsive table-striped align-middle mt-2 calender">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th class="row2" width="10%">Booking</th>
                            @for ($i = 1; $i <= 14; $i++)
                            <th class="row2" width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                            @endfor
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @for($j = 0; $j <= 18; $j++)
                            <tr>
                                <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                @for($i = 1; $i <= 14; $i++)
                                    @if(null !==\App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() &&
                                    \App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first()->active == 1)
                                        @if(null !==\App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first())
                                        <td>
                                            <input class="calender-cell" type="text" name="{{ $booking->length_of_time }}" placeholder="{{\App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first()->length_of_time}}" value="×" size="1" disabled>
                                        </td>
                                        @else
                                        <td>
                                            <input class="calender-cell" type="text" name="{{ $booking->length_of_time }}" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" value="×" size="1" disabled>
                                        </td>
                                        @endif

                                    @elseif (\App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() ||
                                        null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                        <td>
                                            <input class="calender-cell" type="text" name="{{ $booking->length_of_time }}" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" value="×" size="1" disabled>
                                        </td>
                                    @else

                                        @if(null !==\App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() &&
                                        \App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first()->active == 0)
                                        <td class="align-middle text-center">
                                            <input id="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" class="calender-cell" type="button" onclick="location.href='{{ action('HomeController@reservation', ['booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"),
                                                'cut' => $booking->cut, 'perm' => $booking->perm, 'color' => $booking->color, 'treatment' => $booking->treatment, 'spa' => $booking->spa,
                                                'price' => $booking->price, 'length_of_time' => $booking->length_of_time,
                                                'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                                'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                                'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                                'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}'" name="{{ \App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first()->length_of_time }}" value="〇" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" size="1" >
                                        </td>

                                        @else

                                        <td class="align-middle text-center">
                                            <input id="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" class="calender-cell" type="button" onclick="location.href='{{ action('HomeController@reservation', ['booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"),
                                                'cut' => $booking->cut, 'perm' => $booking->perm, 'color' => $booking->color, 'treatment' => $booking->treatment, 'spa' => $booking->spa,
                                                'price' => $booking->price, 'length_of_time' => $booking->length_of_time,
                                                'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                                'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                                'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                                'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}'" name="{{ $booking->length_of_time }}" value="〇" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" size="1" >
                                        </td>
                                        @endif
                                    @endif
                                @endfor
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">

                {{-- これで×を判定している --}}
                <input id="length_of_time" type="hidden" name="id" value="{{ $booking->length_of_time }}">
                
            </form>
            <table>
                <tbody>
                    <tr>
                        <th width="1%">
                            <span class="fixed-output">Total</span>
                            <span class="fixed-output2">{{ $booking->price }}</span>
                        </th>
                        <th width="2%">
                            <span class="fixed-output3">所要時間</span>
                            <span class="fixed-output4">{{ $booking->length_of_time }}</span>
                        </th>
                        <th width="3.5%">
                            <div class="back-container"><a href="{{ action('HomeController@reservationPlan') }}"><button id="back-pc" type="button" class="btn back">◀戻る</button></a></div>
                            <div class="next-container"><a href="{{ action('HomeController@calender') }}"><button type="button" id="cancel"class="btn cancel">取消</button></a></div>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
