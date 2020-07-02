
@extends('layouts.front4')

@section('content')
<link href="{{ asset('css/PC/reservation.css') }}" rel="stylesheet">
<link href="{{ asset('css/media/reservation.css') }}" rel="stylesheet">
<div class="img-container">
    <img alt="" class="main-img" src="{{ asset('image/woman4.jpg') }}">
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <form id="sp-form-1" action="{{ action('HomeController@booking') }}" method="POST">
                {{ csrf_field() }}
                <div class="offset-md-3">
                    <table class="confirmation-form">
                        <tbody>
                            <tr>
                                <th>お名前</th>
                                <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->family_name }} {{ Auth::user()->first_name }}</td>
                            </tr>
                            <tr>
                                <th>予約日時</th>
                                <td>&nbsp;&nbsp;&nbsp;{{ $booking_date_month }}月{{ $booking_date_day }}日 {{ $booking_date_hour }}:{{ $booking_date_minute }}<input id="latest_booking_date" type="hidden" class="form-control" name="latest_booking_date" value="{{ $booking_date_month }}月{{ $booking_date_day }}日 {{ $booking_date_hour }}:{{ $booking_date_minute }}" required autocomplete="latest_booking_date" autofocus></td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td><input id="phone_number" type="tel" class="form-control" name="phone_number" value="{{ Auth::user()->phone_number }}" required autocomplete="phone_number" autofocus></td>
                            </tr>
                            <tr>
                                <th>予約プラン</th>
                                <td>@if ($booking->cut != '')&nbsp;&nbsp;&nbsp;{{ $booking->cut }}@endif
                                    @if ($booking->perm != '')&nbsp;&nbsp;&nbsp;{{ $booking->perm }}@endif
                                    @if ($booking->color != '')&nbsp;&nbsp;&nbsp;{{ $booking->color }}@endif
                                    @if ($booking->spa != '')&nbsp;&nbsp;&nbsp;{{ $booking->spa }}@endif
                                    @if ($booking->treatment != '')&nbsp;&nbsp;&nbsp;{{ $booking->treatment }}@endif
                                {{--  <td>&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="latest_booking_plan" name="latest_booking_plan" value="{{ $booking->cut }} {{ $booking->perm }} {{ $booking->color }} {{ $booking->spa }} {{ $booking->treatment }}"disabled></td>  --}}
                            </tr>
                            <tr>
                                <th>料金</th>
                                <td>&nbsp;&nbsp;&nbsp;{{ $booking->price }}<input id="price" type="hidden" name="price" value="{{ $booking->price }}"></td>
                            </tr>
                            <tr class="last">
                                <th>所要時間</th>
                                <td>&nbsp;&nbsp;&nbsp;{{ $booking->length_of_time }}<input id="length_of_time" type="hidden" name="length_of_time" value="{{ $booking->length_of_time }}"></td>
                            </tr>
                        </tbody>
                    </table>
                    <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                    {{--  <input id="id" type="hidden" name="cut" value="{{ $booking->cut }}">
                    <input id="id" type="hidden" name="perm" value="{{ $booking->perm }}">
                    <input id="id" type="hidden" name="color" value="{{ $booking->color }}">
                    <input id="id" type="hidden" name="spa" value="{{ $booking->spa }}">
                    <input id="id" type="hidden" name="treatment" value="{{ $booking->treatment }}">  --}}
                    <input id="latest_booking_date_number" type="hidden" name="latest_booking_date_number" value="{{ $booking_date_month }}{{ $booking_date_day }}{{ $booking_date_hour }}{{ $booking_date_minute }}">
                    <input type="hidden" class="form-control" id="latest_booking_plan" name="latest_booking_plan" value="{{ $booking->cut }} {{ $booking->perm }} {{ $booking->color }} {{ $booking->spa }} {{ $booking->treatment }}">
                </div>
                {{--  <a type="button" href="{{ action('HomeController@calender') }}"><button class="btn btn-danger float-right ml-2 pl-3 pr-3">キャンセル</button></a>
                <input id="submit" class="btn confirm-button float-right mb-3 pl-4 pr-4" row="10" type="submit" value="予約確定">  --}}
                <div class="plan-footer-container-pc">
                    <ul class="float1 ml-5">
                        <li class="back-container offset-md-2">
                            <a href="{{ action('HomeController@reservationDate', ['price' => $booking->price, 'length_of_time' => $booking->length_of_time, 'cut' =>$booking->cut, 'perm' =>$booking->perm, 'color' =>$booking->color, 'spa' =>$booking->spa, 'treatment' =>$booking->treatment,]) }}"><button type="button" class="btn back">◀戻る</button></a>
                        </li>
                        <li class="cancel-container">
                            <a href="{{ action('HomeController@calender') }}"><button type="button" id="cancel"class="btn cancel">取消</button></a>
                        </li>
                        <li class="next-container">
                            <input id="next"class="btn next" type="submit" value="予約確定">
                        </li>
                    </ul>
                </div>
            </div>
            <table class="plan-footer-container delete">
                <tbody>
                    <tr>
                        <th width="5%">
                        {{--  <div class="fixed-output">  --}}
                            <a href="{{ action('HomeController@reservationDate', ['price' => $booking->price, 'length_of_time' => $booking->length_of_time, 'cut' =>$booking->cut, 'perm' =>$booking->perm, 'color' =>$booking->color, 'spa' =>$booking->spa, 'treatment' =>$booking->treatment,]) }}"><button type="button" class="btn back">◀戻る</button></a>
                        {{--  </div>  --}}
                        </th>
                        {{--  <th width="2%">
                            <div class="fixed-output3"><div id="output2"></div></div>
                        </th>  --}}
                        <th width="3.5%">
                            <div class="float-left back-container"><a href="{{ action('HomeController@calender') }}"><button type="button" id="cancel" class="btn cancel">取消</button></a></div>
                            <div class="float-right next-container"><input id="next"class="btn next" type="submit" value="予約確定"></div>
                        </th>
                    </tr>
                </tbody>
            </table>
            {{--  <div class="plan-footer-container delete">
                <ul class="float1 ml-5">
                    <li class="back-container">
                        <a href="{{ action('HomeController@reservationDate', ['price' => $booking->price, 'length_of_time' => $booking->length_of_time, 'cut' =>$booking->cut, 'perm' =>$booking->perm, 'color' =>$booking->color, 'spa' =>$booking->spa, 'treatment' =>$booking->treatment,]) }}"><button type="button" class="btn back">◀戻る</button></a>
                    </li>
                    <li class="cancel-container">
                        <a href="{{ action('HomeController@calender') }}"><button type="button" id="cancel" class="btn cancel">取消</button></a>
                    </li>
                    <li class="next-container">
                        <input id="next"class="btn next" type="submit" value="予約確定">
                    </li>
                </ul>
            </div>  --}}

    </div>
</div>
<table>
    <tbody class="plan-footer-container delete">
        <tr>
            <th width="5%">
            {{--  <div class="fixed-output">  --}}
                <a href="{{ action('HomeController@reservationDate', ['price' => $booking->price, 'length_of_time' => $booking->length_of_time, 'cut' =>$booking->cut, 'perm' =>$booking->perm, 'color' =>$booking->color, 'spa' =>$booking->spa, 'treatment' =>$booking->treatment,]) }}"><button type="button" class="btn back">◀戻る</button></a>
            {{--  </div>  --}}
            </th>
            {{--  <th width="2%">
                <div class="fixed-output3"><div id="output2"></div></div>
            </th>  --}}
            <th width="3.5%">
                <div class="float-left back-container"><a href="{{ action('HomeController@calender') }}"><button type="button" id="cancel" class="btn cancel">取消</button></a></div>
                <div class="float-right next-container"><input id="next"class="btn next" type="submit" value="予約確定"></div>
            </th>
        </tr>
    </tbody>
</table>
</form>
    <script>


        {{-- $(function(){
            $('#submit').click(function(){

                $('#latest_booking_plan').prop('disabled', false);

              $('#sp-form-1').submit();
            });
          })

          $('#phone_number').click(function() {
              $('#phone_number').prop('disabled', false);
          }) --}}

          $(function(){
            history.pushState(null, null, null); //ブラウザバック無効化
            //ブラウザバックボタン押下時
            $(window).on("popstate", function (event) {
              history.pushState(null, null, null);
              window.alert('前のページに戻る場合、前に戻るボタンから戻ってください。');
            });
           });
    </script>

    <style>



        #latest_booking_plan {
            background-color: rgba(240, 248, 255, 0.01);
            border: 0.05px solid rgba(240, 248, 255, 0.673);
            width:100%;
        }
        #latest_booking_date {
            background-color: rgba(240, 248, 255, 0.01);
            border: 0.05px solid rgba(240, 248, 255, 0.673);
            width:100%;
        }
       #phone_number {
            background-color: rgba(240, 248, 255, 0.01);
            border: 0.05px solid rgba(240, 248, 255, 0.673);
            width: 100%;
        }

        ul {
            list-style-type: none;

            font-weight: 600;
            font-size: 16px
        }



        .float1 {
            margin: auto;
        }
        .float1 li {
            float: left;
        }

        .main-img {

            object-fit: cover;
            width: 100%;
            object-position: 50% 100%
        }  --}}


        @media screen and (max-width: 960px) {
            .last td:last-child {
              border-bottom: solid 1px #ccc;
              width: 100%;
            }
            table {
              width: 80%;
            }

             td {
          　　border-bottom: none;
              display: block;
              width: 100%;
            }

            th {
           border: solid 1px #ccc;
            border-bottom: none;
              display: block;
              width: 100%;
              height: 10px;
              line-height: 5px
            }
          }
    </style>

@endsection
