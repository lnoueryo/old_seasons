<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new_front3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reservation_plan.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
        <header class="transform">
            <div class="header-top-flame">
                <div class="header-container">
                    <div class="logo-flame">
                        <div class="logo-container">
                            <span class="">
                                <a href="" class="custom-logo-link" rel="home">
                                    <span>SeaSons</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="header">
            <div class="concept-main-img-flame">
                <div class="concept-main-img-container">
                    <img src="image/woman4.jpg" alt="" class="booking-img">
                </div>
            </div>
        </div>
        <main class="">
            @yield('content')
        </main>
    </body>
</html>
