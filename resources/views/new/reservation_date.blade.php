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
            <table class="table table-responsive table-striped table-hover text-center align-middle mt-5 calender">
                <thead class="thead-light">
                    <tr>
                        <th colspan="16">SeaSons 空き状況</th>
                    </tr>
                    <tr>
                        <th width="10%"></th>
                        @for ($i = 1; $i <= 14; $i++)
                            <th width="3%">{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("DD日")  }}<br>{{ \Carbon\Carbon::today()->addDays($i-1)->isoformat("(ddd)")  }}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @for($j = 0; $j <= 18; $j++)
                    <tr>
                        <th class="align-middle" scope="row">{{ \Carbon\Carbon::today()->addHours(10)->addMinutes($j*30)->format("H:i") }}</th>
                        @for($i = 1; $i <= 14; $i++)
                        @if(null !==\App\User::where('latest_booking_date', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"))->first() ||  \App\BookingController::find(1)->where('day', 'like', '%'.\Carbon\Carbon::today()->addDays($i-1)->isoformat("ddd"). '%')->first() || \Carbon\Carbon::now() > \Carbon\Carbon::today()->addDays($i-1)->addHours(8)->addMinutes($j*30+30) || null !==\App\BookingController::where('day_time', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i"))->first() || null !==\App\BookingController::where('day_of_the_week', \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->isoformat("YYYY年MM月DD日"))->first())
                        <td>×</td>
                        @else
                        <td><a href="{{ action('HomeController@newReservation', ['time' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes($j*30)->format("n月j日 H:i")]) }}">〇</a></td>
                        @endif
                        @endfor
                    </tr>
                    @endfor
                </tbody>
            </table>


              <div class="container">
                <div class="verticalSpacer"></div>
                <div class="clientIP ng-binding" ng-hide="isSecureLogin">お客様ご利用機器のIPアドレス 60.158.231.42</div>
                <div class="sectionBlock noborder alignCenter">
                  <button class="button largeButton2 primary block limitWidth" ng-click="showScreen('next');scrollToTop()" type="submit">
                    次へ
                  </button>
                </div>
              </div>
            </div>


        </form>






            {{-- <div class="floatButtons" ng-show="!isPageBottom &amp;&amp; (singleMenuSelection || isCombiMenuSelected)" style="">
              <button class="button basicButton nextButton" ng-click="showScreen('next');scrollToTop()" type="submit">
                次へ
              </button>
            </div>
            <div class="overlay ng-hide" ng-click="resetUnselectedMenu()" ng-show="isUnselectedMenu">
              <div class="dialog">
                <div class="controlBar alignRight">
                  <button class="controlButton closeButton black" ng-click="resetUnselectedMenu()"></button>
                </div>
                <div class="body">
                  <div class="text ng-binding">
                    ご指定のメニューでは予約をお受けできません。恐れ入りますが、再度選択をお願いします。
                  </div>
                  <div class="buttons">
                    <button class="button largeButton primary block" ng-click="resetUnselectedMenu()">OK</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="overlay ng-hide" ng-click="goBack()" ng-show="!isReservable">
              <div class="dialog">
                <div class="controlBar alignRight">
                  <button class="controlButton closeButton black" ng-click="goBack()"></button>
                </div>
                <div class="body">
                  <div class="text">
                    大変申し訳ございませんが、ただいま予約をお受けできません。お電話にてお問い合わせください。
                    <br>
                  </div>
                  <div class="columnBlock">
                    <div class="largeFontSize bold">お問合せナンバー：Error - #5100</div>
                  </div>
                  <div class="verticalSpacer"></div>
                  <div class="text">
                    <b class="ng-binding">フルーツギャザリング 六本木ヒルズ店 Jetset</b>
                    <br>
                    <dial dial-to="salon.phoneNo" class="ng-isolate-scope"><button class="textButton linkColor bold ng-binding  notUseDisabledAlpha" ng-class="{'':true, 'notUseDisabledAlpha':!isMobile()}" ng-click="confirm()" ng-disabled="!isMobile()" disabled="disabled">
            <i class="fa fa-lg fa-phone-square"></i>
            03-5843-1464
          </button>
          <div class="overlay dialConfirm ng-hide" ng-class="{displayFlex: confirming}" ng-show="confirming">
            <div class="dialog dialConfirm ng-hide" ng-show="confirming">
              <div class="controlBar alignRight">
                <button class="controlButton closeButton black" ng-click="cancel()"></button>
              </div>
              <div class="body">
                <div class="text ng-binding">
                  <i class="fa fa-lg fa-phone-square"></i>
                  03-5843-1464
                </div>
                <div class="buttons">
                  <button class="button largeButton default block" ng-click="cancel()">キャンセル</button>
                  <button class="button largeButton primary block" ng-click="dial()">発信</button>
                </div>
              </div>
            </div>
          </div>
          </dial>
                    <br>
                    <br>
                  </div>
                  <div class="buttons">
                    <button class="button largeButton primary block" ng-click="goBack()">OK</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div> --}}

@endsection('content')
