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
    {{-- <script src="{{ asset('js/plan.js') }}" defer></script> --}}
    <script src="{{ asset('js/reservation_plan_sm.js') }}" defer></script>
    <script src="{{ asset('js/reservation.js') }}" defer></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="sample.css" type="text/css" media="screen and (max-width:400px)">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
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
