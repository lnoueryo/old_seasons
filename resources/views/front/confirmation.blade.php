@extends('layouts.front')

@section('content')
    <style>
        @media screen and (max-width: 640px) {
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
        .back-cancel {
            list-style: none;
        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="col-md-10 offset-md-1">
                <table class="confirmation-form">
                    <tbody>
                        <tr>
                            <th>お名前</th>
                            <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->family_name }} {{ Auth::user()->first_name }}</td>
                        </tr>
                        <tr>
                            <th>予約日時</th>
                            <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->latest_booking_date }}</td>
                        </tr>
                        {{-- <tr>
                            <th>電話番号</th>
                            <td>{{ Auth::user()->phone_number }}</td>
                        </tr> --}}
                        <tr>
                            <th>予約プラン</th>
                            <td>&nbsp;&nbsp;&nbsp;{{ \App\User::find(Auth::user())->first()->latest_booking_plan }}
                        </tr>
                        <tr>
                            <th>料金</th>
                            <td>&nbsp;&nbsp;&nbsp;{{ \App\User::find(Auth::user())->first()->price }}</td>
                        </tr>
                        <tr class="last">
                            <th>所要時間</th>
                            <td>&nbsp;&nbsp;&nbsp;{{ \App\User::find(Auth::user())->first()->length_of_time }}</td>
                        </tr>
                    </tbody>
                </table>
                <form action="{{ action('HomeController@cancel') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="latest_booking_date" value="">
                    <input type="hidden" name="latest_booking_date_number" value="">
                    <input type="hidden" name="latest_booking_plan" value="">
                    <input type="hidden" name="price" value="">
                    <input type="hidden" name="length_of_time" value="">
                    <ul class="back-cancel">
                        <li class="float-right">
                            <a type="button" class="btn btn-secondary px-5 ml-1" href="{{ action('HomeController@calender') }}">戻る</a>

                        </li>
                        <li>
                            <input id="submit" class="btn confirm-button float-right mb-3 pl-4 pr-4" row="10" type="submit" value="予約キャンセル"><a href="{{ action('HomeController@cancel') }}" class="btn btn-danger float-right" type="button">予約キャンセル</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
