@extends('layouts.front')

@section('content')
<link href="{{ asset('css/PC/confirmation.css') }}" rel="stylesheet">
<link href="{{ asset('css/media/confirmation.css') }}" rel="stylesheet">
    <style>
        @media screen and (max-width: 640px) {

        }
        .back-cancel {
            list-style: none;
        }
    </style>
<div id="confirmation">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="col-md-10 offset-md-1">
                    <table class="contact-form">
                        <tbody>
                            <tr>
                                <th>お名前</th>
                                <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->family_name }} {{ Auth::user()->first_name }}</td>
                            </tr>
                            <tr>
                                <th>予約日時</th>
                                <td>&nbsp;&nbsp;&nbsp;@{{ bookings.booking_date }}</td>
                            </tr>
                            <tr>
                                <th>予約プラン</th>
                                <td>&nbsp;&nbsp;&nbsp;@{{ bookings.booking_plan }}</td>
                            </tr>
                            <tr>
                                <th>料金</th>
                                <td>&nbsp;&nbsp;&nbsp;@{{ bookings.price }}</td>
                            </tr>
                            <tr class="last">
                                <th>所要時間</th>
                                <td>&nbsp;&nbsp;&nbsp;@{{ bookings.length_of_time }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody id="plan-footer-container-pc" class="plan-footer-container-pc delete">
                            <tr>
                                <th width="5%">
                                    <div class="back-container"><a href="{{ action('HomeController@calender') }}"><button id="back-pc" type="button" class="btn back">◀戻る</button></a></div>
                                </th>
                                <th width="3.5%">
                                    {{--  <a href="{{ action('HomeController@reservationDate', ['price' => $booking->price, 'length_of_time' => $booking->length_of_time, 'cut' =>$booking->cut, 'perm' =>$booking->perm, 'color' =>$booking->color, 'spa' =>$booking->spa, 'treatment' =>$booking->treatment,]) }}"><button type="button" class="btn next">予約変更</button></a>  --}}
                                    <div class="next-container"><a href="{{ action('HomeController@cancel') }}"><button type="button" id="cancel"class="btn cancel">キャンセル</button></a></div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <table>
        <tbody id="plan-footer-container" class="plan-footer-container delete">
            <tr>
                <th width="5%">
                    <div class="back-container"><a href="{{ action('HomeController@calender') }}"><button id="back-pc" type="button" class="btn back">◀戻る</button></a></div></th>
                <th width="3.5%">
                    {{--  <a href="{{ action('HomeController@reservationDateSM', ['price' => $booking->price, 'length_of_time' => $booking->length_of_time, 'cut' =>$booking->cut, 'perm' =>$booking->perm, 'color' =>$booking->color, 'spa' =>$booking->spa, 'treatment' =>$booking->treatment,]) }}"><button type="button" class="btn next">予約変更</button></a>  --}}
                    <div class="next-container"><a href="{{ action('HomeController@cancel') }}"><button type="button" id="cancel"class="btn cancel">キャンセル</button></a></div>
                </th>
            </tr>
        </tbody>
    </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
 <script>
    var booking = @json($booking);
    console.log(booking);
    var a = new Vue({
        el: '#confirmation',
        data: {
            bookings: booking,
        },
        mounted: function(){
            if (window.matchMedia('(max-width: 960px)').matches) {
                var element = document.getElementById('plan-footer-container');
                element.classList.remove("delete");
            } else {
            var element2 = document.getElementById('plan-footer-container-pc');
            element2.classList.remove("delete");
            }
        },
    });
 </script>
@endsection
