@extends('layouts.new_front4')
<style>
    .booking-img {
        margin-top: -103.5px;
    }
    .main-container {
        transform: translate3d(0,-251px,0);
    }
</style>
@section('content')


<div class="container card main-container col-md-8">
    <div class="col-md">
        <div ng-show="selectMenu" class="ng-scope" style="">
            <div class="container">
              <div class="titlebar">
                <div class="titlebar-bar noborder">
                  <div class="titlebar-title">メニュー選択</div>
                  <div class="indicators">
                    <div class="dot ng-hide" ng-hide="skipVisitStatus"></div>
                    <div class="dot"></div>
                    <div class="dot current"></div>
                    <div class="dot ng-hide" ng-hide="skipNailHand" style=""></div>
                    <div class="dot ng-hide" ng-hide="skipNailFoot"></div>
                    <div class="dot ng-hide" ng-hide="skipEyeLash"></div>
                    <div class="dot"></div>
                    <div class="dot" ng-hide="skipEditCustomer"></div>
                    <div class="dot"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="justify-content-center">
                            <form id="sp-form-1" action="{{ action('HomeController@booking') }}" method="POST">
                                <div class="col-md-10 offset-md-1"><table class="table contact-form table-responsive">
                                    <tbody>
                                        {{-- <tr>
                                            <th>お問い合わせ内容 *</th>
                                            <td><textarea class="col-md-12 form-control" rows="6" name="message" required="required"></textarea></td>
                                        </tr> --}}
                                        <tr>
                                            <th>お名前</th>
                                            <td>&nbsp;&nbsp;&nbsp;{{ Auth::user()->family_name }} {{ Auth::user()->first_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>予約日時</th>
                                            <td>&nbsp;&nbsp;&nbsp;{{ $user1 }}<input id="latest_booking_date" type="hidden" class="form-control" name="latest_booking_date" value="{{ $user1 }}" required autocomplete="latest_booking_date" autofocus></td>
                                        </tr>
                                        <tr>
                                            <th>電話番号</th>
                                            <td><input id="phone_number" type="tel" class="form-control" name="phone_number" value="{{ Auth::user()->phone_number }}" required autocomplete="phone_number" autofocus></td>
                                        </tr>
                                        <tr>
                                            <th>予約プラン</th>
                                            <td>&nbsp;&nbsp;&nbsp;カット<input id="latest_booking_plan" type="hidden" class="form-control" name="latest_booking_plan" value="カット" required autocomplete="latest_booking_plan" autofocus></td>
                                        </tr>
                                        <tr>
                                            <th>料金</th>
                                            <td>&nbsp;&nbsp;&nbsp;3000円</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                                {{ csrf_field() }}
                                <a type="button" class="btn btn-danger float-right col-md-2" href="{{ action('HomeController@calender') }}">キャンセル</a>
                                <input class="btn sub-button float-right mb-3 mr-2 col-md-2" row="10" type="submit" value="予約確定">
                            </form>
                        </div></div>
                    </div>
                </div>
            </div>
@endsection('content')
