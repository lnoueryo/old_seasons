
@extends('layouts.front3')

@section('content')

{{--  date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30+$user_activity->length_of_time)->format("mjHi")  --}}
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="justify-content-center">
                <form id="sp-form-1" action="{{ action('HomeController@reservation') }}" method="POST" name="Form">
                    <div class=" offset-md-2">
                        {{ csrf_field() }}
                        {{-- <table class="table table-responsive table-striped table-hover align-middle mt-5 text-center calender">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center col-md-12" colspan="16"><span id="pc">SeaSons 空き状況　男性カットのみ</span></th>
                                </tr>
                                <tr class="text-center">
                                    <th class="row2" width="10%"></th>

                                    @for ($i = 1; $i <= 14; $i++)
                                        <th class="row2">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody class="">
                                @for($j = 0; $j <= 18; $j++)
                                <tr class="align-middle text-center">
                                    <th class="" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                                    @for($i = 1; $i <= 14; $i++)
                                    @if(null !==\App\User::where('latest_booking_date', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                    <td class="align-middle text-center" id="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mjHi")}}"><input class="calender-cell" type="text" name="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mjHi")}}" value="×" size="1" disabled></td>
                                    @else
                                    <td class="align-middle text-center" id="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mjHi")}}">
                                    <a href="{{ action('HomeController@reservation', ['booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"),
                                        'cut' => $user_activity->cut, 'perm' => $user_activity->perm, 'color' => $user_activity->color, 'treatment' => $user_activity->treatment, 'spa' => $user_activity->spa,
                                        'price' => $user_activity->price, 'length_of_time' => $user_activity->length_of_time,
                                        'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                        'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("j"),
                                        'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                        'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}"><input class="calender-cell" type="text" name="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mjHi")}}" value="〇" size="1" ></a>
                                        </td>
                                    @endif

                                    @endfor
                                </tr>
                                @endfor
                            </tbody>
                        </table> --}}
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
                                    @if(null !==\App\User::where('latest_booking_date', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                                    <td><input class="calender-cell" type="text" name="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mdHi")}}" value="×" size="1" ></td>
                                    @else
                                    <td class="align-middle text-center" id="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mdHi")}}">
                                        <a href="{{ action('HomeController@reservation', ['booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月d日 H:i"),
                                            'cut' => $user_activity->cut, 'perm' => $user_activity->perm, 'color' => $user_activity->color, 'treatment' => $user_activity->treatment, 'spa' => $user_activity->spa,
                                            'price' => $user_activity->price, 'length_of_time' => $user_activity->length_of_time,
                                            'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                            'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                            'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                            'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}"><input class="calender-cell" type="text" name="date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("mdHi")}}" value="〇" size="1" ></a>
                                        </td>
                                    @endif
                                    @endfor
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">

                    {{-- これで×を判定している --}}
                    <input id="length_of_time" type="hidden" name="id" value="{{ $user_activity->length_of_time }}">
                    <a type="button" class="btn btn-danger float-right col-md-2" href="{{ action('HomeController@calender') }}">キャンセル</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>

        $(function(){
            history.pushState(null, null, null); //ブラウザバック無効化
            //ブラウザバックボタン押下時
            $(window).on("popstate", function (event) {
              history.pushState(null, null, null);
              window.alert('前のページに戻る場合、前に戻るボタンから戻ってください。');
            });
           });

           
        {{-- 30
        var length_of_time = document.getElementById('length_of_time');
            if(length_of_time.value == '30分'){
        for (i=0; i< document.Form.length-1; i++) {

            if($("input").val("×")) {
                document.Form.elements[i].value = "×";
            }}
        } --}}


        60
        var length_of_time = document.getElementById('length_of_time');
            if(length_of_time.value == '1時間'){
        for (i=0; i< document.Form.length-1; i++) {

            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }}
        }



            90
            var length_of_time = document.getElementById('length_of_time');
            if(length_of_time.value == '1.5時間'){
        for (i=0; i< document.Form.length-1; i++) {

            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
        }
        }


            120
            var length_of_time = document.getElementById('length_of_time');
            if(length_of_time.value == '2時間'){

                for (i=0; i< document.Form.length-1; i++) {

                    if(document.Form.elements[i+14].value == "×") {
                        document.Form.elements[i].value = "×";
                    }
                    if(document.Form.elements[i+28].value == "×") {
                        document.Form.elements[i].value = "×";
                        document.Form.elements[i+14].value = "×";
                    }
                    if(document.Form.elements[i+42].value == "×") {
                        document.Form.elements[i].value = "×";
                        document.Form.elements[i+14].value = "×";
                        document.Form.elements[i+28].value = "×"
                    }}
            }


        150
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '2.5時間'){
        for (i=0; i< document.Form.length-1; i++) {
            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
            if(document.Form.elements[i+42].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
            }
            if(document.Form.elements[i+56].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
            }}
        }

        180
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '3時間'){
        for (i=0; i< document.Form.length-1; i++) {
            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
            if(document.Form.elements[i+42].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
            }
            if(document.Form.elements[i+56].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
            }
            if(document.Form.elements[i+70].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
            }}
        }
        210
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '3.5時間'){
        for (i=0; i< document.Form.length-1; i++) {
            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
            if(document.Form.elements[i+42].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
            }
            if(document.Form.elements[i+56].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
            }
            if(document.Form.elements[i+70].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
            }
            if(document.Form.elements[i+84].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
            }}
        }

        240
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '4時間'){
        for (i=0; i< document.Form.length-1; i++) {
            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
            if(document.Form.elements[i+42].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
            }
            if(document.Form.elements[i+56].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
            }
            if(document.Form.elements[i+70].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
            }
            if(document.Form.elements[i+84].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
            }
            if(document.Form.elements[i+98].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
            }}
        }
        270


        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '4.5時間'){
        for (i=0; i< document.Form.length-1; i++) {
            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
            if(document.Form.elements[i+42].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
            }
            if(document.Form.elements[i+56].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
            }
            if(document.Form.elements[i+70].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
            }
            if(document.Form.elements[i+84].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
            }
            if(document.Form.elements[i+98].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
            }
            if(document.Form.elements[i+112].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
            }}
        }
        300
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '5時間'){
        for (i=0; i< document.Form.length-1; i++) {
            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
            if(document.Form.elements[i+42].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
            }
            if(document.Form.elements[i+56].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
            }
            if(document.Form.elements[i+70].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
            }
            if(document.Form.elements[i+84].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
            }
            if(document.Form.elements[i+98].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
            }
            if(document.Form.elements[i+112].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
            }
            if(document.Form.elements[i+126].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
                document.Form.elements[i+112].value = "×"
            }
        }
        }

        360
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '5.5時間'){
        for (i=0; i< document.Form.length-1; i++) {
            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
            if(document.Form.elements[i+42].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
            }
            if(document.Form.elements[i+56].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
            }
            if(document.Form.elements[i+70].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
            }
            if(document.Form.elements[i+84].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
            }
            if(document.Form.elements[i+98].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
            }
            if(document.Form.elements[i+112].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
            }
            if(document.Form.elements[i+126].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
                document.Form.elements[i+112].value = "×";
            }
            if(document.Form.elements[i+126].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
                document.Form.elements[i+112].value = "×";
                document.Form.elements[i+126].value = "×";
                document.Form.elements[i+140].value = "×";
            }
        }
        }
        420
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '6時間'){
        for (i=0; i< document.Form.length-1; i++) {
            if(document.Form.elements[i+14].value == "×") {
                document.Form.elements[i].value = "×";
            }
            if(document.Form.elements[i+28].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
            }
            if(document.Form.elements[i+42].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
            }
            if(document.Form.elements[i+56].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
            }
            if(document.Form.elements[i+70].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
            }
            if(document.Form.elements[i+84].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
            }
            if(document.Form.elements[i+98].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
            }
            if(document.Form.elements[i+112].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
            }
            if(document.Form.elements[i+126].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
                document.Form.elements[i+112].value = "×";
            }
            if(document.Form.elements[i+126].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
                document.Form.elements[i+112].value = "×";
                document.Form.elements[i+126].value = "×";
                document.Form.elements[i+140].value = "×";
            }
            if(document.Form.elements[i+140].value == "×") {
                document.Form.elements[i].value = "×";
                document.Form.elements[i+14].value = "×";
                document.Form.elements[i+28].value = "×";
                document.Form.elements[i+42].value = "×";
                document.Form.elements[i+56].value = "×";
                document.Form.elements[i+70].value = "×";
                document.Form.elements[i+84].value = "×";
                document.Form.elements[i+98].value = "×";
                document.Form.elements[i+112].value = "×";
                document.Form.elements[i+126].value = "×";
                document.Form.elements[i+140].value = "×";
                document.Form.elements[i+154].value = "×";
            }
        }
        }
    </script>
@endsection
