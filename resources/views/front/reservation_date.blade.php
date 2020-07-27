
@extends('layouts.front3')

@section('content')
<link href="{{ asset('css/PC/reservation_date.css') }}" rel="stylesheet">
    <style>

        .disabled {
            pointer-events: none;
            color: black;
        }

        body {
            font-size: 1.3rem;
            font-family: "03スマートフォントUI", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", Arial, sans-serif, "Lobster",cursive;
            line-height: 1.5;
            color: rgb(51, 51, 51);
            background-image: linear-gradient(to right bottom, rgb(216, 235, 234), rgb(255, 245, 234));
            text-align: left;
            padding-top: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            margin-top: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            overflow-wrap: break-word;
        }

    </style>
    <div id="app1">
        <div id="calender">
            <keep-alive>
                <div v-bind:is="component"></div>
            </keep-alive>
        </div>
    </div>

        {{--  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>  --}}
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>  --}}
        <script type="text/javascript">
        var dayDayOfTheWeeks = @json($dateArray6);
        var dayOfTheWeek = @json($day_of_the_week);
        var days = @json($days);
        var day = @json($day);
        var hourFromNow = {{ $hour_from_now }};
        var dayTime = @json($day_time);
        var dates = @json($dateArray);
        var currentBooking = @json($current_booking);
        var bookingPlan = @json($booking);

        console.log(bookingPlan.length_of_time);
        </script>
        <script src="{{ asset('js/reservation_date.js') }}" defer></script>

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
