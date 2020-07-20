@extends('layouts.front')
@section('content')
<div id="app2">
    <ul class="address text-center mt-4 mb-5">
        <li>福岡市中央区六本松</li>
        <li><p>4-9-7ジャパンパル101</p></li>
        <li class="tel">TEL.092-775-1821</li>
    </ul>

    <ul class="introduction text-center mt-4 mb-5">
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
    <div class="col-md-10 offset-md-1">
        <div class="quick-booking-able-text">予約表</div>
            <ul id="tabMenu" class="fix-line">
                <li>
                    <a class="man" href="#tabBox1">男性カットのみ</a>
                </li>
                <li>
                    <div class="toggle-switch text-center">
                        <input id="toggle" class="toggle-input" type='checkbox' v-model="toggle">
                        <label for="toggle" class="toggle-label"/>
                    </div>
                </li>
                <li>
                    <a class="woman" href="#tabBox2">女性カットのみ</a>
                </li>
            </ul>
        </div>

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


    <template v-if="{{ $btn }}===2">
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
    </template>
    <template v-if="{{ $btn }}===0">
        <div class="booking-btn-flame text-center">
            <div class="booking-btn-container">
                <a class="justify-content-center" href="{{ action('HomeController@confirmation') }}"><button id="booking-btn-3" class="btn booking-btn mt-3 text-center">予約詳細・変更</button></a>
            </div>
        </div>
    </template>
    <template v-if="{{ $btn }}===1">
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
    </template>
</div>
    <script>
        const booking = @json($json);
        const bookingController = @json($json2);
        const bookingController2 = @json($json3);
        const twoHoursFromNow = {{ \Carbon\Carbon::now()->addHours(2)->format("ndHi") }};
        const dateArray = @json($dateArray);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/calender.min.js') }}" ></script>
@endsection
