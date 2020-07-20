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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/PC/calender.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        {{--  <div class="main-image-flame">
            <div class="main-image-container">
                <img src="image/headermain2.png" data-src="image/headermain2.png" alt="" class="main-img" data-srcset="image/headermain2.png">
            </div>
        </div>  --}}


        @include('components.admin_drawer')
        @include('components.admin_navigation')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
