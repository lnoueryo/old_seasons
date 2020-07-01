<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/plan.js') }}" defer></script>
    <script src="{{ asset('js/reservation_plan_sm.js') }}" defer></script>
    <script src="{{ asset('js/reservation_date.js') }}" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="sample.css" type="text/css" media="screen and (max-width:300px)">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="logo-flame">
            <div class="logo-container">
                <a href="" class="custom-logo-link" rel="home">
                    <p class="icon-text">SeaSons</p>
                    {{-- <img src="image/clover2.svg" alt="" id="icon"> --}}
                </a>
            </div>
        </div>
        <div class="main-image-flame">
            <div class="image-container-woman5">
                <img id="woman5" src="image/woman5.png"  data-src="image/woman5.jpg" alt="seasons" class="main-img" data-srcset="image/woman5.jpg">
            </div>
        </div>
        <div class="header">
    </div>
        <main class="">
            @yield('content')
        </main>
    <footer>
        <p class="pp text-center"><a href="{{ route('policy') }}">プライバシーポリシー</a></p>
        <p class="cr">c 2019 SEASONS Inc.</p>
    </footer>
</body>
</html>

    <style>

        footer {
            width: 100%;
            margin-top: 60px;
        }

        footer .pp {
            color: #6e6e6e;
            background-color: #d8ebea;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 0.9rem;
            font-weight: bold;
          }

          .pp a {
            color: #6e6e6e;
            background-color: #d8ebea;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 0.9rem;
            font-weight: bold;
            text-decoration: none;
          }

          footer .cr {
            color: #ffffff;
            background-color: #a0c5ef;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 0.9rem;
          }
    </style>

    <script>
        {{-- 30
        var length_of_time = document.getElementById('length_of_time');
            if(length_of_time.value == '30分'){
        for (i=0; i< document.Form.length-1; i++) {

            if(document.Form.elements[i].value == "×") {
                document.Form.elements[i].value = "×";
            }}
        }


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
        } --}}

    </script>


    <script>
        'use strict';

        while(i <= 3) {
            {{-- var  name= document.getElementsByName("");
            if(name.value === '〇') {
                document.getElementById('date{{\Carbon\Carbon::today()->addDays(0)->addHours(10)->addMinutes(30)->format("mdHi")}}').textContent = '〇';
            } else {
                document.getElementById('date{{\Carbon\Carbon::today()->addDays(0)->addHours(10)->addMinutes(30)->format("mdHi")}}').textContent = '×';
            } --}}

            {{-- const now = new Date;
            const event2 = new Date();
            event2.setMonth(new.getMonth(), new.getDate()*j;)
            const event = new Date();
            event.setHours(10,0+i*30,0);

            var hour = event.getHours();
            var minute = event.getMinutes();
            var minute2 = String(minute).padStart(2,'0');
            const time = `${hour}${minute2}`;
            console.log(time); --}}


{{--
        const formatDay ='date' + month + day + hour + minute + 30*i;
        console.log(formatDay); --}}

            i++;
        }

        {{-- document.getElementById('date{{\Carbon\Carbon::today()->addDays(0)->addHours(10)->addMinutes(30)->format("mdHi")}}').textContent = '123';
        var date = document.getElementsByName("date06291000");
        console.log(values[0].value); --}}


        document.getElementById("output").textContent = 'date'+new Date();



        {{-- for (var i = 0; i < 15; i++){
            for (var j = 0; j < 19; j++){

                const now = new Date;
                const today = new Date();
                today.setMonth(now.getMonth()+1, now.getDate()+i);



                  const event = new Date();
                  event.setHours(10,0+j*30,0);
                  const event2 = new Date();
                  event2.setHours(10,30+j*30,0);

                  var month = today.getMonth();
                  var month2 = String(month).padStart(2,'0');
                  var day = today.getDate();
                  var day2 = String(day).padStart(2,'0');
                  var hour = event.getHours();
                  var hour2 = String(hour).padStart(2,'0');
                  var minute = event.getMinutes();
                  var minute2 = String(minute).padStart(2,'0');
                  const time = `date${month2}${day2}${hour2}${minute2}`;
                  {{-- console.log(time); --}}


                  var hour3 = event2.getHours();
                  var hour4 = String(hour3).padStart(2,'0');
                  var minute3 = event2.getMinutes();
                  var minute4 = String(minute3).padStart(2,'0');
                  const time2 = `date${month2}${day2}${hour4}${minute4}`;
                  console.log(time2);



                  var values = document.getElementsByName(time);
                  if(values[0].value == "×") {
                    document.getElementById(time2).textContent = '×';
                    document.getElementById(time) ? document.getElementById(time2).textContent = '×';
                }



            }
          } --}}

        const now = new Date;
        const event2 = new Date();
        event2.setMonth(now.getMonth()+1, now.getDate());



          const event = new Date();
          event.setHours(10,0+30,0);
          var month = event2.getMonth();
          var month2 = String(month).padStart(2,'0');
          var day = event2.getDate();
          var day2 = String(day).padStart(2,'0');
          var hour = event.getHours();
          var hour2 = String(hour).padStart(2,'0');
          var minute = event.getMinutes();
          var minute2 = String(minute).padStart(2,'0');
          const time = `${month2}${day2}${hour2}${minute2}`;
          console.log(time->format("mdHi"));


          var values = document.getElementsByName("date06271000");
          var id = document.getElementById('date06271000');

          console.log(values[0].value);
          console.log(id.value);

          {{-- var values = document.getElementsByName("date06291000");
            console.log(values[0].value); --}}

            var values = document.getElementsByName("date06241030");
            console.log(values[0].value);

    </script>
