@extends('layouts.front3')
@section('content')
    <style>
        .calender {

            height: 600px;
            border: solid 1.2px;
            border-color: rgb(0, 0, 0, 0.2);
            vertical-align: middle;

            }

            .calender th {/*table内のthに対して*/
                padding: 10px;/*上下左右10pxずつ*/
                font-size: 0.9rem;

            }

            .calender th:first-child {
            /* 横スクロール時に固定する */
            position: -webkit-sticky;
            position: sticky;
            left: 0;
            background-color: #e9ecef;
            border: 20px #dee2e6;
            z-index: 10;

            }

            .calender thead th {
            /* 縦スクロール時に固定する */
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            /* tbody内のセルより手前に表示する */
            z-index: 1;
            border-bottom: none;

            }

            .calender thead th:first-child {
            padding: 30px;
            z-index: 10;

            }

            .calender td {/*table内のtdに対して*/
            padding: 3px 10px;/*上下3pxで左右10px*/
            z-index: 0;

            }

            .calender td:hover {/*table内のtdに対して*/
            padding: 3px 10px;/*上下3pxで左右10px*/
            z-index: 0;
            background-color:#4444442d;
            }

            /* input */
            .calender-cell {
                width: 40px;
                height: 35px;
                border:none;
                background:none;
                text-align: center;
                z-index: 0;
                color: #4b9dd8;

            }

            .calender-cell:active {

                border:none;
                background:none;
                outline:0;

            }
    </style>

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
                            <tbody>
                                @for($j = 0; $j <= 18; $j++)
                                <tr>
                                    <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                    @for($i = 1; $i <= 14; $i++)
                                        @if (\App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first())
                                            <td class="align-middle text-center">
                                                <input class="calender-cell text-center" type="text" name="30分" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" value="×" size="1" disabled>
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
            const bookingController2 = @json($json3);
            console.log(booking[0].length_of_time);
            {{-- console.log(bookingController[7].day_of_the_week);
            var abc = bookingController.day_of_the_week;
            $('form[name="Form"] input[placeholder^=' + abc + ']').val("×"); --}}


            {{--  ブッキングコントローラー日付用  --}}
            bookingController.forEach(function(item,index){

                var dayOfTheWeek = item.day_of_the_week;

                for (var i=0; i< document.Form.length-1; i++) {
                    var placeholder = $('form[name="Form"] input').eq(i).attr("placeholder");

                if(Math.floor(placeholder/10000) == dayOfTheWeek) {
                    $('form[name="Form"] input').eq(i).val("×");
                    $('form[name="Form"] input').eq(i).attr('onclick', '');
                }

            }
            })


            {{--  ブッキングコントローラー日付用  --}}
            bookingController2.forEach(function(item,index){

                var dayTime = item.day_time;

                for (var i=0; i< document.Form.length-1; i++) {
                    var placeholder = $('form[name="Form"] input').eq(i).attr("placeholder");

                if(placeholder == dayTime) {
                    $('form[name="Form"] input').eq(i).val("×");
                    $('form[name="Form"] input').eq(i).attr('onclick', '');
                }

            }
            })


            {{--  既存の予約用  --}}
            booking.forEach(function(item,index){
                var bookingDate = item.booking_date_number;
                var time = item.length_of_time;

                for (var i=0; i< document.Form.length-1; i++) {
                    if($('form[name="Form"] input').eq(i+28).val() !== "〇" && $('form[name="Form"] input').eq(i+28).val() !== "×") {
                        for (var k=14; k< 28; k++) {
                            $('form[name="Form"] input').eq(i+k).val("×");
                            $('form[name="Form"] input').eq(i+k).attr('onclick', '');
                        }

                        }

                    if($('form[name="Form"] input').eq(i).attr("placeholder") == bookingDate) {

                        $('form[name="Form"] input').eq(i).prop("name", time)
                        for (var l=0; l< 16; l+=1) {
                        if($('form[name="Form"] input').eq(i).attr('name') === 1+0.5*l + '時間') {
                            for (var j=0; j< 14*l+15; j+=14) {
                                $('form[name="Form"] input').eq(i+j).val("×");
                                $('form[name="Form"] input').eq(i+j).attr('onclick', '');
                            }

                        }  else {
                            $('form[name="Form"] input').eq(i).val("×");
                            $('form[name="Form"] input').eq(i).attr('onclick', '');
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
