
@extends('layouts.front3')

@section('content')
    <style>
        .disabled {
            pointer-events: none;
            color: black;
        }
        @media and screen(max-width: 800px){

        }
        ul {
            list-style-type: none;
            padding-left: 0;
            font-weight: 600;
            font-size: 16px
        }

        .float1 li {
            height: 50px;
            {{--  padding: 20px;  --}}
            {{--  padding-right: 30px;  --}}

        }
        {{--  .float1 {
            margin: auto;
        }
        .float1 li {
            float: left;
        }  --}}

        .main-img {

            object-fit: cover;
            width: 100%;
            object-position: 50% 100%
        }


        input[type=checkbox] {
            width:			10px;
            height:			10px;
            -moz-transform:		scale(1.4);
            -webkit-transform:	scale(1.4);
            transform:		scale(1.4);
            margin-top: 0px;
            vertical-align:0.08em;

        }



    </style>
{{--  date{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30+$booking->length_of_time)->format("mjHi")  --}}
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="justify-content-center">
                <form id="sp-form-1" action="{{ action('HomeController@reservation') }}" method="POST" name="Form">
                    <div class=" offset-md-2">
                        {{ csrf_field() }}
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
                    {{--  <input id="length_of_time" type="hidden" name="id" value="1時間">  --}}
                    <input id="length_of_time" type="hidden" name="id" value="{{ $booking->length_of_time }}">

                    <a href="{{ action('HomeController@calender') }}"><button type="button" class="btn btn-danger float-right col-md-2">キャンセル</button></a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container plan-footer-container">
<ul class="float1">
    <li class="back-container-sm float-right">
        <a href="{{ route('reservationSM')}}"><button type="button" class="btn back">◀戻る</button></a>
    </li>
    <li class="back-container-pc float-right">
        <a href="{{ route('reservationPC')}}"><button type="button" class="btn back">◀戻る</button></a>
    </li>
</ul>
<ul class="output-container">
    <li class="fixed-output">
        Total<div id="output">{{ $booking->price }}</div>
    </li>
    <li class="fixed-output2">
        <div id="output2">{{ $booking->length_of_time }}</div>
    </li>
</ul>
</div>
    <script>
        $(document).ready(function(){
            if (matchMedia('(max-width: 798px)').matches) {
                $('.back-container-sm').show();
                $('.back-container-pc').hide();
            } else {
                $('.back-container-sm').hide();
                $('.back-container-pc').show();
            }


          });


        $(function(){
            history.pushState(null, null, null); //ブラウザバック無効化
            //ブラウザバックボタン押下時
            $(window).on("popstate", function (event) {
              history.pushState(null, null, null);
              window.alert('前のページに戻る場合、下記の戻るボタンからお戻りください。');
            });
           });



        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '1時間'){

                for (j=0; j< 15; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '1.5時間'){

                for (j=0; j< 29; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }


        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '2時間'){

                for (j=0; j< 43; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }


        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '2.5時間'){

                for (j=0; j< 57; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '3時間'){

                for (j=0; j< 71; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '3.5時間'){

                for (j=0; j< 85; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '4時間'){

                for (j=0; j< 99; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '4.5時間'){

                for (j=0; j< 113; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '5時間'){

                for (j=0; j< 127; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '5.5時間'){

                for (j=0; j< 141; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var abc = document.Form.elements[i];
            {{-- console.log(abc.placeholder); --}}

            if(abc.placeholder === '6時間'){

                for (j=0; j< 155; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }





        60
        for (i=0; i< document.Form.length-1; i++) {

        if(document.Form.elements[i].name == '1時間'){


        if(document.Form.elements[i+14].value == "×") {
            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');

        }
        if(!document.Form.elements[i+14].value) {
            for (j=0; j< 14; j++) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }


        }
    }

    }

        90
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '1.5時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           else if(!document.Form.elements[i+28].value) {
                for (k=0; k< 28; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }

        120
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '2時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+42].value) {
                for (k=0; k< 42; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }

        150
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '2.5時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+56].value == "×") {
            for (j=0; j< 55; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+56].value) {
                for (k=0; k< 56; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }

        180
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '3時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+56].value == "×") {
            for (j=0; j< 55; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+70].value == "×") {
            for (j=0; j< 69; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+70].value) {
                for (k=0; k< 70; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }

        210
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '3.5時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+56].value == "×") {
            for (j=0; j< 55; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+70].value == "×") {
            for (j=0; j< 69; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+84].value == "×") {
            for (j=0; j< 83; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+84].value) {
                for (k=0; k< 84; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }
        240
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '4時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+56].value == "×") {
            for (j=0; j< 55; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+70].value == "×") {
            for (j=0; j< 69; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+84].value == "×") {
            for (j=0; j< 83; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+98].value == "×") {
            for (j=0; j< 97; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+98].value) {
                for (k=0; k< 98; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }

        270
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '4.5時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+56].value == "×") {
            for (j=0; j< 55; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+70].value == "×") {
            for (j=0; j< 69; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+84].value == "×") {
            for (j=0; j< 83; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+98].value == "×") {
            for (j=0; j< 97; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+112].value == "×") {
            for (j=0; j< 111; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+112].value) {
                for (k=0; k< 112; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }
        300
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '5時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+56].value == "×") {
            for (j=0; j< 55; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+70].value == "×") {
            for (j=0; j< 69; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+84].value == "×") {
            for (j=0; j< 83; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+98].value == "×") {
            for (j=0; j< 97; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+112].value == "×") {
            for (j=0; j< 111; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+126].value == "×") {
            for (j=0; j< 125; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+126].value) {
                for (k=0; k< 126; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }

        330
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '5.5時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+56].value == "×") {
            for (j=0; j< 55; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+70].value == "×") {
            for (j=0; j< 69; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+84].value == "×") {
            for (j=0; j< 83; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+98].value == "×") {
            for (j=0; j< 97; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+112].value == "×") {
            for (j=0; j< 111; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+126].value == "×") {
            for (j=0; j< 125; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+140].value == "×") {
            for (j=0; j< 139; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+140].value) {
                for (k=0; k< 140; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }
        360
        var length_of_time = document.getElementById('length_of_time');
        if(length_of_time.value == '6時間'){
    for (i=0; i< document.Form.length-1; i++) {
        if(document.Form.elements[i+14].value == "×") {

                document.Form.elements[i].value = "×";
                document.Form.elements[i].classList.add('disabled');
            }
        if(document.Form.elements[i+28].value == "×") {
            for (j=0; j< 27; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+42].value == "×") {
            for (j=0; j< 41; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+56].value == "×") {
            for (j=0; j< 55; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+70].value == "×") {
            for (j=0; j< 69; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+84].value == "×") {
            for (j=0; j< 83; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+98].value == "×") {
            for (j=0; j< 97; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+112].value == "×") {
            for (j=0; j< 111; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+126].value == "×") {
            for (j=0; j< 125; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+140].value == "×") {
            for (j=0; j< 139; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
        if(document.Form.elements[i+156].value == "×") {
            for (j=0; j< 155; j+=14) {

                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');
            }
            }
           if(!document.Form.elements[i+156].value) {
                for (k=0; k< 156; k++) {
                    document.Form.elements[i+k].value = "×";
                    document.Form.elements[i+k].classList.add('disabled');

                }
            }



    }

    }



    </script>
@endsection
