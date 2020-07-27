@extends('layouts.front')
@section('content')
<div id="app1">
    <ul class="address text-center mt-4 mb-5">
        <li>福岡市中央区六本松</li>
        <li><p>4-9-7ジャパンパル101</p></li>
        <li class="tel">TEL.092-775-1821</li>
    </ul>
    @{{ dates }}
    <ul class="introduction text-center mt-4 mb-5">
        <li class="mt-2">美容室SeaSons(シーズン)はお客様の四季折々のヘアースタイルを常に提供させて頂けたらいいな、と言う思いでオープンしました。</li>
        <li>誰でも来やすいアットホームな店つくりを心がけておりますので気軽に立ち寄っていただけたら幸いです。</li>
        <li><span class="name">代表　道下 雅巳</span></li>
    </ul>
    <div class="col-md-10 offset-md-1">
        <div class="quick-booking-able-text">予約表</div>
        <ul id="tabMenu" class="fix-line">
            <li>
                <a class="man" href="#tabBox1" v-on:click="current = false">男性カットのみ</a>
            </li>
            <li>
                <div class="toggle-switch text-center">
                    <input id="toggle" class="toggle-input" type='checkbox' v-model="current">
                    <label for="toggle" class="toggle-label">
                </div>
            </li>
            <li>
                <a class="woman" href="#tabBox2" v-on:click="current = true">女性カットのみ</a>
            </li>
        </ul>
    </div>
    <div id="calender">
        <keep-alive>
            <div v-bind:is="component"></div>
        </keep-alive>
    </div>
    <ul id="tabMenu" class="fix-line">
        <li>
            <a class="man" href="#tabBox1" v-on:click="current = false">男性カットのみ</a>
        </li>
        <li>
            <div class="toggle-switch text-center">
                <input id="toggle" class="toggle-input" type='checkbox' v-model="current">
                <label for="toggle" class="toggle-label">
            </div>
        </li>
        <li>
            <a class="woman" href="#tabBox2" v-on:click="current = true">女性カットのみ</a>
        </li>
    </ul>
</div>
<div id="app2">
    <div v-bind:is="component"></div>
</div>
    {{--  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>  --}}
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>  --}}
    <script type="text/javascript">
    var btn = {{ $btn }};
    var dayDayOfTheWeeks = @json($dateArray2);
    var dayOfTheWeek = @json($day_of_the_week);
    var days = @json($days);
    var day = @json($day);
    var hourFromNow = {{ $hour_from_now }};
    var dayTime = @json($day_time);
    var dates = @json($dateArray);
    var currentBooking = @json($current_booking);
    {{-- Object.defineProperty(Array.prototype, 'chunk_inefficient', {
        value: function(chunkSize) {
            var array=this;
            return [].concat.apply([],
                array.map(function(elem,i) {
                    return i%chunkSize ? [] : [array.slice(i,i+chunkSize)];
                })
            );
        }
    });
    var dateNumber = @json($date_number);
    var abc = dateNumber.chunk_inefficient(14);

    var array1 = Array(19);
    array1.fill('booking_date_number');
    console.log(abc);
    console.log(array1[0]);

    for(var i = 0; i < 19; i++){
        var result  = {};
        result[array1[i]] =  abc[i];
        console.log(result);52
    } --}}
    </script>
    <script src="{{ asset('js/calender.vue.js') }}" defer></script>

        <style>
            .pointerEvents {
                pointer-events: none;
            }
            input {
                border: none;
            }


            .float li {
                height: 50px;
                {{--  padding: 20px;  --}}
                {{--  padding-right: 30px;  --}}

            }
            .float {
                margin: auto;
            }


            .main-img {

                object-fit: cover;
                width: 100%;
                object-position: 50% 100%
            }

            .abc {
                padding-right: 50px;
                margin-right: 10px;
            }


        </style>
@endsection
