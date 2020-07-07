@extends('layouts.front3')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div id="tabBoxes">
                <div id="tabBox1">
                    <form id="sp-form-1" action="{{ action('HomeController@reservation') }}" method="POST" name="Form">
                        <table class="table table-responsive table-striped align-middle mt-2 calender">
                            <thead class="thead-light">
                                <tr>
                                </tr>
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
                                    @if (\App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first() ||
                                        null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                            <td>
                                                <input class="calender-cell" type="text" name="30分" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" value="×" size="1" disabled>
                                            </td>
                                        @else
                                        <td class="align-middle text-center">
                                                <input id="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" class="calender-cell" type="button"
                                                onclick="location.href='{{ action('HomeController@reservation', ['booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"),
                                                'cut' => 'カット',
                                                'price' => '2900円', 'length_of_time' => '30分',
                                                'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                                'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                                'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                                'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}'"
                                                name="" value="〇" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" size="1" >
                                        </td>
                                        @endif
                                    @endfor
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@guest
<div class="booking-btn-flame-pc text-center">
    <div class="booking-btn-container">
        <a class="booking-link" href="{{ action('HomeController@reservationPlan') }}"><button id="booking-btn-1" class="btn sub-button mt-3 text-center">予約へ進む</button></a>
    </div>
</div>
<div class="booking-btn-flame-sm text-center">
    <div class="booking-btn-container">
        <a class="justify-content-center" href="{{ action('HomeController@reservationPlanSM') }}"><button id="booking-btn-2" class="btn booking-btn mt-3 text-center">予約へ進む</button></a>
    </div>
</div>
@endguest
@auth
@if (null !== \App\Booking::where('user_id', Auth::user()->id)->where('booking_date_number', Auth::user()->latest_booking_date_number)->where('active', 1)->first() &&
 \App\Booking::where('user_id', Auth::user()->id)->where('active', 1)->first()->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
<div class="booking-btn-flame text-center">
    <div class="booking-btn-container">
        <a class="justify-content-center" href="{{ action('HomeController@confirmation') }}"><button id="booking-btn-3" class="btn booking-btn mt-3 text-center">予約詳細・変更</button></a>
    </div>
</div>
@else
<div class="booking-btn-flame-pc text-center">
    <div class="booking-btn-container">
        <a class="booking-link" href="{{ action('HomeController@reservationPlan') }}"><button id="booking-btn-4" class="btn sub-button mt-3 text-center">予約へ進む</button></a>
    </div>
</div>
<div class="booking-btn-flame-sm text-center">
    <div class="booking-btn-container">
        <a class="booking-link" href="{{ action('HomeController@reservationPlanSM') }}"><button id="booking-btn-5" class="btn booking-btn mt-3 text-center">予約へ進む</button></a>
    </div>
</div>
@endif
@endauth
{{-- {{ \App\Booking::where('booking_date_number', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi"))->first()->length_of_time }} --}}
    <script>

        $(function() {
            const booking = @json($json);
            const bookingController = @json($json2);
            console.log(booking[0].length_of_time);
            {{-- console.log(bookingController[7].day_of_the_week);
            var abc = bookingController.day_of_the_week;
            $('form[name="Form"] input[placeholder^=' + abc + ']').val("×"); --}}

            {{-- bookingController.forEach(function(item,index){
                var dayOfTheWeek = item.day_of_the_week;
                for (var i=0; i< document.Form.length-1; i++) {
                if($('form[name="Form"] input[placeholder^=' + dayOfTheWeek + ']').eq(i)) {
                    $('form[name="Form"] input[placeholder^=' + dayOfTheWeek + ']').eq(i).val("×");
                }
            }
            }) --}}

            booking.forEach(function(item,index){
                var bookingDate = item.booking_date_number;
                var time = item.length_of_time;

                for (var i=0; i< document.Form.length-1; i++) {
                    if($('form[name="Form"] input').eq(i+28).val() !== "〇" && $('form[name="Form"] input').eq(i+28).val() !== "×") {
                        for (var k=14; k< 28; k++) {
                            $('form[name="Form"] input').eq(i+k).val("×");
                            {{-- document.Form.elements[i+k].classList.add('disabled'); --}}
                        }

                        }
                        {{-- if($('form[name="Form"] input[placeholder^={{ \App\BookingController::find(46)->day_of_the_week }}]').eq(i)) {
                            $('form[name="Form"] input[placeholder^={{ \App\BookingController::find(46)->day_of_the_week }}]').eq(i).val("×");
                        } --}}
                    if($('form[name="Form"] input').eq(i).attr("placeholder") == bookingDate) {

                        $('form[name="Form"] input').eq(i).prop("name", time)
                        for (var l=0; l< 16; l+=1) {
                        if($('form[name="Form"] input').eq(i).attr('name') === 1+0.5*l + '時間') {
                            for (var j=0; j< 14*l+15; j+=14) {
                                $('form[name="Form"] input').eq(i+j).val("×");
                            }

                        }  else {
                            $('form[name="Form"] input').eq(i).val("×");
                        }
                    }
                    }

                }


        })

        })


    </script>
@endsection
{{-- if($('form[name="Form"] input').eq(i).attr('name') === '1.5時間') {
    for (var j=0; j< 29; j+=14) {
        $('form[name="Form"] input').eq(i+j).val("×");
    }
} if($('form[name="Form"] input').eq(i).attr('name') === '2時間') {
    for (var j=0; j< 43; j+=14) {
        $('form[name="Form"] input').eq(i+j).val("×");
    }
} if($('form[name="Form"] input').eq(i).attr('name') === '2.5時間') {
    for (var j=0; j< 57; j+=14) {
        $('form[name="Form"] input').eq(i+j).val("×");
    }
} if($('form[name="Form"] input').eq(i).attr('name') === '3時間') {
    for (var j=0; j< 71; j+=14) {
        $('form[name="Form"] input').eq(i+j).val("×");
    }
} if($('form[name="Form"] input').eq(i).attr('name') === '3.5時間') {
    for (var j=0; j< 85; j+=14) {
        $('form[name="Form"] input').eq(i+j).val("×");
    }
} if($('form[name="Form"] input').eq(i).attr('name') === '4時間') {
    for (var j=0; j< 99; j+=14) {
        $('form[name="Form"] input').eq(i+j).val("×");
    }
} --}}
