@extends('layouts.front')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="">
                <nav class="navbar-expand-lg navbar-light nav1 mt-4 mb-5">
                    <div class="collapse navbar-collapse" id="Navber">
                        <ul class="navbar-nav main-nav">
                            @guest
                            <li class="nav-item p-3 active">
                            <a class="nav-link mx-2" href="{{ route('home') }}">トップ</a>
                            </li>
                            {{--  <li class="nav-item p-3">
                            <a class="nav-link mx-2" href="#">ブログ</a>
                            </li>  --}}
                            <li class="nav-item p-3">
                            <a class="nav-link mx-2" href="{{ route('concept') }}">コンセプト</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-1" href="{{ route('menu') }}">メニュー</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-1" href="{{ route('contact') }}">コンタクト</a>
                            </li>
                            {{--  <li class="nav-item p-3">
                            <a class="nav-link mx-1" href="{{ route('access') }}">アクセス</a>
                            </li>  --}}
                            <li class="nav-item p-3">
                                <a class="nav-link mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item p-3">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                            @else
                            @if(Auth::user()->admin == true)
                            <li class="nav-item p-3 active">
                            <a class="nav-link mx-3" href="{{ route('calender') }}">アドミン</a>
                            </li>
                            @else
                            <li class="nav-item p-3 active">
                            <a class="nav-link mx-3" href="{{ route('home') }}">トップ</a>
                            </li>
                            @endif
                            {{--  <li class="nav-item p-3">
                            <a class="nav-link mx-2" href="#">ブログ</a>
                            </li>  --}}
                            <li class="nav-item p-3">
                            <a class="nav-link mx-3" href="{{ route('concept') }}">コンセプト</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-3" href="{{ route('menu') }}">メニュー</a>
                            </li>
                            <li class="nav-item p-3">
                            <a class="nav-link mx-3" href="{{ route('contact') }}">コンタクト</a>
                            </li>
                            {{--  <li class="nav-item p-3">
                            <a class="nav-link mx-2" href="{{ route('access') }}">アクセス</a>
                            </li>  --}}
                            <ul class="text-center navbar-nav">
                            <li class="nav-item p-3">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle mx-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->family_name }} {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu  drop-down-container" aria-labelledby="navbarDropdown">
                                    @if (null !== \App\Booking::where('user_id', Auth::user()->id)->where('booking_date_number', Auth::user()->latest_booking_date_number)->where('active', 1)->first() && \App\Booking::where('user_id', Auth::user()->id)->where('active', 1)->first()->booking_date_number > \Carbon\Carbon::now()->format("ndHi"))
                                    <a class="dropdown-item" href="{{ route('confirmation') }}">
                                        予約確認
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        ログアウト
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                            @endguest
                    </div>
                </nav>
            </div>

            <ul class="address col-md-6 offset-md-3 text-center mt-4 mb-5">
                <li>福岡市中央区六本松</li>
                <li><p>4-9-7ジャパンパル101</p></li>
                <li class="tel">TEL.092-775-1821</li>
            </ul>

            <ul class="introduction col-md-12 text-center mt-4 mb-5">
                <li class="mt-2">美容室SeaSons(シーズン)はお客様の四季折々のヘアースタイルを常に提供させて頂けたらいいな、と言う思いでオープンしました。</li>
                <li>誰でも来やすいアットホームな店つくりを心がけておりますので気軽に立ち寄っていただけたら幸いです。</li>
                <li><span class="name">代表　道下 雅巳</span></li>
            </ul>
{{--
            <div class="balloon-container">
                <div class="balloon col-md-4 offset-md-7 delete">
                    <p class="">カットのみの方はカレンダーの〇からクイック予約をご利用いただけます。</p>
                </div>
            </div>  --}}

            <div class="quick-booking-able-text">Quick Booking Table</div>
            <ul id="tabMenu" class="fix-line">
                <li>
                    <a class="man" href="#tabBox1">男性カットのみ</a>
                </li>
                <li>
                    <div class="toggle-switch text-center">
                        <input id="toggle" class="toggle-input" type='checkbox'/>
                        <label for="toggle" class="toggle-label"/>
                    </div>
                </li>
                <li>
                    <a class="woman" href="#tabBox2">女性カットのみ</a>
                </li>
            </ul>
        </div>
    </div>
</div>


{{--  <div class="container">
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

                <div id="tabBox2">
                    <form id="sp-form-1" action="{{ action('HomeController@reservation') }}" method="POST" name="Form2">
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
                                                'price' => '3100円', 'length_of_time' => '1時間',
                                                'booking_date_month' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n"),
                                                'booking_date_day' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("d"),
                                                'booking_date_hour' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("H"),
                                                'booking_date_minute' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("i")]) }}'"
                                                name="1時間" value="〇" placeholder="{{\Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("ndHi")}}" size="1" >
                                        </td>
                                        @endif
                                    @endfor
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </form>
                </div>
                <ul id="tabMenu" class="fix-line">
                    <li>
                        <a class="man" href="#tabBox1">男性カットのみ</a>
                    </li>
                    <li>
                          <span>&nbsp;&nbsp;||&nbsp;&nbsp;</span>

                    </li>
                    <li><a class="woman" href="#tabBox2">女性カットのみ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>  --}}
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div id="tabBoxes">
                <div id="tabBox1">
                    <form id="sp-form-1" action="{{ action('HomeController@reservation') }}" method="POST" name="Form">
                        @include('components.calender', ['cut' => 'カット', 'perm' => '', 'color' => '', 'treatment' => '', 'spa' => '', 'price' => '2900円', 'length_of_time' => '30分'])
                    </form>
                </div>

                <div id="tabBox2">
                    <form id="sp-form-1" action="{{ action('HomeController@reservation') }}" method="POST" name="Form2">
                        @include('components.calender',  ['cut' => 'カット', 'perm' => '', 'color' => '', 'treatment' => '', 'spa' => '', 'price' => '3100円', 'length_of_time' => '1時間'])
                    </form>
                </div>
                <ul id="tabMenu" class="fix-line">
                    <li>
                        <a class="man" href="#tabBox1">男性カットのみ</a>
                    </li>
                    <li>
                          <span>&nbsp;&nbsp;||&nbsp;&nbsp;</span>

                    </li>
                    <li><a class="woman" href="#tabBox2">女性カットのみ</a></li>
                </ul>
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

    <script>
        const booking = @json($json);
        const bookingController = @json($json2);
        const bookingController2 = @json($json3);
        console.log(booking[0].length_of_time);
        const twoHoursFromNow = {{ \Carbon\Carbon::now()->addHours(2)->format("ndHi") }};


        for (var i = 0; i < document.Form.length - 1; i++) {
            var placeholder = $('form[name="Form"] input').eq(i).attr("placeholder");
            if (placeholder < twoHoursFromNow) {
                        $('form[name="Form"] input').eq(i).val("×");
                        $('form[name="Form"] input').eq(i).attr('disabled', true);
            }
          }

        for (var i = 0; i < document.Form2.length - 1; i++) {
            var placeholder = $('form[name="Form2"] input').eq(i).attr("placeholder");
            if (placeholder < twoHoursFromNow) {
                        $('form[name="Form2"] input').eq(i).val("×");
                        $('form[name="Form2"] input').eq(i).attr('disabled', true);
            }
          }
    </script>
    <script src="{{ asset('js/calender.min.js') }}" defer></script>
@endsection
