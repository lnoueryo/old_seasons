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
                            <td>&nbsp;&nbsp;&nbsp;{{ $booking->booking_plan }}</td>
                        </tr>
                        <tr>
                            <th>予約プラン</th>
                            <td>&nbsp;&nbsp;&nbsp;{{ $booking->booking_date }}
                        </tr>
                        <tr>
                            <th>料金</th>
                            <td>&nbsp;&nbsp;&nbsp;{{ $booking->price }}円</td>
                        </tr>
                        <tr class="last">
                            <th>所要時間</th>
                            <td>&nbsp;&nbsp;&nbsp;{{ $booking->length_of_time }}</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <th width="3.5%">
                                <div class="back-container"><a href="{{ action('HomeController@calender') }}"><button id="back-pc" type="button" class="btn back">◀戻る</button></a></div>
                                <div class="next-container"><a href="{{ action('HomeController@cancel') }}"><button type="button" id="cancel"class="btn cancel">キャンセル</button></a></div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
