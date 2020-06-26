@extends('layouts.new_front3')

@section('content')


<div class="container card main-container col-md-8">
    <div class="col-md- offset-md-1">
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
            <div class="mainSection">




                <table>
                    <tr>
                        <td colspan=3>
                            <div class="input col-md-10">
                            <input id="cut1" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="SPEED" style="">
                            <input id="cut2" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="SPEED" style="">
                            <input id="cut3" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="SPEED" style="">
                            <span>Cut</span><span>gsdrvsd</span><span>Cut</span>
                        </div>
                        </td>
                    </tr>
                    <tbody>
                        <tr>
                            <td>
                               <div class="note ng-binding">¥3,100- 税抜き<br>ダウンスタイルのセット（シャンプーなし）20min　<br>サブスクリプション（定額制）¥16,000- 税抜き</div>
                            </td>
                            <td>
                               <div class="note ng-binding">¥3,100- 税抜き<br>ダウンスタイルのセット（シャンプーなし）20min　<br>サブスクリプション（定額制）¥16,000- 税抜き</div>
                            </td>
                            <td>
                               <div class="note ng-binding">¥3,100- 税抜き<br>ダウンスタイルのセット（シャンプーなし）20min　<br>サブスクリプション（定額制）¥16,000- 税抜き</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
              <div class="colorBlock bg-white noMarginBottom" ng-hide="isCombi">
                <div class="container">
                    <form>
                        <div class="columnBlock noPadding transparent">
                            <div class="menuPlateContainer">
                                <div class="input">
                                    <input id="cut1" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="SPEED" style="">Cut
                                    <input id="cut2" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="[object Object]" style="">speed
                                    <input id="cut3" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="[object Object]" style="">speed
                                </div>

                            <div class="menuName">

                            </div>
                        <div class="plateBase menuPlate">

                            <div class="menuName">
                                {{-- <label class="radio block bold noMarginBottom ng-binding" for="cut2">
                                    <input checked id="cut2" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="ng-untouched ng-valid ng-dirty ng-valid-parse" name="cut" value="[object Object]" style="">JETSETTER
                                    SPEED
                                </label> --}}
                            </div>

                            <div class="infoBlock">
                                <div class="note ng-binding">¥3,100- 税抜き<br>ダウンスタイルのセット（シャンプーなし）20min　<br>サブスクリプション（定額制）¥16,000- 税抜き</div>
                            </div>
                        </div>

                      <div class="plateBase menuPlate">

                        <div class="menuName">
                          {{-- <label class="radio block bold noMarginBottom ng-binding" for="cut">
                            <input id="cut2" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="ng-untouched ng-valid ng-dirty ng-valid-parse" name="cut" value="[object Object]" style="">JETSETTER
                        </label> --}}
                        </div>
                        <div class="infoBlock" ng-show="menu.description">
                          <div class="note ng-binding" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description">¥3,600- 税抜き<br>シャンプーブロー（アイロン使用不可、スタイル指定不可）30min<br>サブスクリプション（定額制）¥18,000-税抜き<br></div>
                        </div>
                      </div>
                      <div class="plateBase menuPlate ng-scope" ng-repeat="menu in possibleBasicMenuList">

                        <div class="menuName">
                          {{-- <label class="radio block bold noMarginBottom ng-binding" for="1233642_b">
                            <input id="cut2" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="ng-untouched ng-valid ng-dirty ng-valid-parse" name="cut" value="[object Object]" style="">JETSETTER
                            JETSETTER PRO
                          </label> --}}
                        </div>

                        <div class="infoBlock" ng-show="menu.description">
                          <div class="note ng-binding" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description">￥4,500- 税抜き<br>シャンプーブロー&amp;ダウンスタイルセット（アイロン使用可）45min<br>サブスクリプション（定額制）¥23,000- 税抜き<br></div>
                        </div>
                      </div>
                      <div class="input">
                        <input id="cut1" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="SPEED" style="">Cut
                        <input id="cut2" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="[object Object]" style="">speed
                        <input id="cut3" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="[object Object]" style="">speed
                    </div>
                      <div class="plateBase menuPlate ng-scope" ng-repeat="menu in possibleBasicMenuList">

                        <div class="menuName">
                          {{-- <input id="1233647_b" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="ng-pristine ng-untouched ng-valid" name="949" value="[object Object]">
                          <label class="radio block bold noMarginBottom ng-binding" for="1233647_b">
                            MEN'Sシャンプー&amp;スタイリング
                          </label> --}}
                        </div>
                        <div class="infoBlock" ng-show="menu.description">
                          <div class="note ng-binding" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description">¥2,200- 税抜き<br>男性限定 シャンプー＆スタイリングコース （アイロン使用込み）30分</div>
                        </div>
                      </div><!-- end ngRepeat: menu in possibleBasicMenuList --><div class="plateBase menuPlate ng-scope" ng-repeat="menu in possibleBasicMenuList">
                        <div class="menuName">
                          {{-- <input id="1238393_b" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="ng-pristine ng-untouched ng-valid" name="952" value="[object Object]">
                          <label class="radio block bold noMarginBottom ng-binding" for="1238393_b">
                            メンバー SPEED
                          </label> --}}
                        </div>
                        <div class="infoBlock" ng-show="menu.description">
                          <div class="note ng-binding" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description">サブスクリプション(定額制)にご加入の方のみこちらをお選び下さい。</div>
                        </div>
                      </div><!-- end ngRepeat: menu in possibleBasicMenuList --><div class="plateBase menuPlate ng-scope" ng-repeat="menu in possibleBasicMenuList">
                        <div class="menuName">
                          {{-- <input id="1238399_b" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="ng-pristine ng-untouched ng-valid" name="955" value="[object Object]">
                          <label class="radio block bold noMarginBottom ng-binding" for="1238399_b">
                            メンバー JETSETTER
                          </label> --}}
                        </div>
                        <div class="infoBlock" ng-show="menu.description">
                          <div class="note ng-binding" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description">サブスクリプション(定額制)にご加入の方のみこちらをお選び下さい。</div>
                        </div>
                      </div><!-- end ngRepeat: menu in possibleBasicMenuList -->
                      <div class="input">
                        <input id="cut1" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="SPEED" style="">Cut
                        <input id="cut2" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="[object Object]" style="">speed
                        <input id="cut3" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="each-input" name="cut" value="[object Object]" style="">speed
                    </div>
                      <div class="plateBase menuPlate ng-scope" ng-repeat="menu in possibleBasicMenuList">

                        <div class="menuName">
                          {{-- <input id="1238404_b" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="ng-pristine ng-untouched ng-valid" name="958" value="[object Object]">
                          <label class="radio block bold noMarginBottom ng-binding" for="1238404_b">
                            メンバー JETSETTER PRO
                          </label> --}}
                        </div>
                        <div class="infoBlock" ng-show="menu.description">
                          <div class="note ng-binding" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description">サブスクリプション(定額制)にご加入の方のみお選び下さい。</div>
                        </div>
                      </div><!-- end ngRepeat: menu in possibleBasicMenuList --><div class="plateBase menuPlate ng-scope" ng-repeat="menu in possibleBasicMenuList">
                        <div class="menuName">
                          {{-- <input id="1238405_b" ng-model="$parent.singleMenuSelection" ng-value="menu" type="radio" class="ng-pristine ng-untouched ng-valid" name="961" value="[object Object]">
                          <label class="radio block bold noMarginBottom ng-binding" for="1238405_b">
                            アップスタイルセット (Half/Full Up Do)
                          </label> --}}
                        </div>
                        <div class="infoBlock" ng-show="menu.description">
                          <div class="note ng-binding" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description">¥4,000- 〜 ¥5,000- (税抜き）<br>ハーフアップスタイル、アップスタイルのセット（シャンプーなし）　45分<br>＊こちらのメニューはお電話でのみご予約を承ります。</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="colorBlock basicOption" ng-show="normalOptionList.length > 0" style="">
                <div class="container">
                  <div class="columnBlock transparent">
                    <!-- ngIf: salon.normalOptionMenuTitle --><div class="columnBlock-title fontWeightNormal ng-scope" ng-if="salon.normalOptionMenuTitle">
                      <div class="preWrap ng-binding">
                        オプションメニューをご希望の場合は下記から選択してください。
                      </div>
                    </div><!-- end ngIf: salon.normalOptionMenuTitle -->
                    <div class="menuPlateContainer">
                      <!-- ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList" style="">
                        <div class="menuName">
                          <input id="1233637" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1233637">
                            炭酸シャンプー(Sparkling Shampoo)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                              ¥2,000- (税抜き）
          心地のよい爽快感が得られる夏にオススメのリフレッシュコース（ブロー込60分）
          弾ける炭酸泡で頭皮の汚れを浮かせ血行促進。健康な頭皮へと導きます。
          ソーダスプレーを使用した10分間のマッサージ付きシャンプー。

                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList">
                        <div class="menuName">
                          <input id="1233638" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1233638">
                            スパシャンプー (Spa Shampoo)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                               ¥2,000- (税抜き）
          アロマの香りで癒されるリラクゼーションコース（ブロー込60分）
          アロマオイルを使用し10分間のマッサージで血行を促進し凝り固まった頭皮をほぐします。

                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList">
                        <div class="menuName">
                          <input id="1233640" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1233640">
                            Tゾーンカラー (T-Zone Color)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                              ¥2,000〜　（税抜き）
          分け目とフェイスラインのみの３〜７トーンの白髪染め。
          気になる部分を短時間で染められる人気のメニューです。
                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList">
                        <div class="menuName">
                          <input id="1233643" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1233643">
                            ヘアマスク (Hair Mask)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                              ¥1,000〜 (税抜き）
          ダメージヘア用トリートメント
                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList">
                        <div class="menuName">
                          <input id="1233644" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1233644">
                            3ステップトリートメント (3-Step Treatment)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                              ホームケア付き　¥3,000~ (税抜き）
                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList">
                        <div class="menuName">
                          <input id="1233645" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1233645">
                            5ステップトリートメント (5-Step Treatment)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                              ビジターの方はシャンプーブロー込み¥12,600 (税抜き)
          メンバー＆回数券の方は¥9,000 (税抜き)

          SHISEIDO 最高峰５step トリートメント　
          ※ロング料金＋¥1,000 (税抜き)
                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList">
                        <div class="menuName">
                          <input id="1233646" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1233646">
                            5min~マッサージ (5min~ Massage)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                              ¥500〜　（税抜き）
          首肩、頭皮の中からお好きな箇所をお選びいただきます。
                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList">
                        <div class="menuName">
                          <input id="1238415" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1238415">
                            ヘアアレンジ(Ponytails, braids etc.)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                              ¥500〜　（税抜き）
          編み込みポニーテールなどのカジュアルヘアアレンジ
                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList --><div class="plateBase menuPlate basicOption ng-scope" ng-repeat="menu in normalOptionList">
                        <div class="menuName">
                          <input id="1238416" ng-disabled="!optionMenuEnabled[menu.id] || isOptionTimeOver(menu)" ng-model="optionMenuSelection[menu.id]" type="checkbox" class="ng-pristine ng-untouched ng-valid">
                          <label class="checkbox block bold noMarginBottom ng-binding" for="1238416">
                            前髪カット (Bang Trim)
                          </label>
                        </div>
                        <div class="infoBlock" ng-show="menu.note || menu.description">
                          <div class="note" ng-show="menu.note">
                            <div class="preWrap ng-binding">
                              ¥1,000- (税抜き）
                            </div>
                          </div>
                          <div class="note ng-binding ng-hide" ng-bind-html="menu.description | yen | newlines" ng-show="menu.description"></div>
                        </div>
                      </div><!-- end ngRepeat: menu in normalOptionList -->
                    </div>
                  </div>
                </div>
              </div>



              <div class="container">
                <div class="verticalSpacer"></div>
                <div class="clientIP ng-binding" ng-hide="isSecureLogin">お客様ご利用機器のIPアドレス 60.158.231.42</div>
                <div class="sectionBlock noborder alignCenter">
                  <button class="button largeButton2 primary block limitWidth" ng-click="showScreen('next');scrollToTop()" type="submit">
                   <a href="{{ action('HomeController@reservationDate') }}">次へ</a>
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
