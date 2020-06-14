@extends('layouts.front2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="justify-content-center">
                <form id="sp-form-1" action="{{ action('HomeController@booking') }}" method="POST">
                    <div class="col-md-10 offset-md-1">
                        <table class="table contact-form table-responsive">
                            <tbody>
                                <tr>
                                    <th>お名前</th>
                                    <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->family_name }} {{ Auth::user()->first_name }}</td>
                                </tr>
                                <tr>
                                    <th>予約日時</th>
                                    <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->latest_booking_date }}</td>
                                </tr>
                                <tr>
                                    <th>電話番号</th>
                                    <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->phone_number }}</td>
                                </tr>
                                <tr>
                                    <th>予約プラン</th>
                                    <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->latest_booking_plan }}</td>
                                </tr>
                                <tr>
                                    <th>料金</th>
                                    <td>&nbsp;&nbsp;&nbsp;3000円</td>
                                </tr>
                            </tbody>
                        </table>
                        <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <a type="button" class="btn btn-secondary float-right col-md-2" href="{{ action('HomeController@calender') }}">戻る</a>
                        <a href="{{ action('HomeController@cancel') }}" class="btn btn-danger float-right mb-3 mr-2 col-md-2" type="button">予約キャンセル</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
