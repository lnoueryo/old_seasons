
@extends('layouts.front4')

@section('content')
<link href="{{ asset('css/PC/reservation_plan.css') }}" rel="stylesheet">
{{--  <div id="reservation">
    <div class="img-container">
        <picture>
            <source type="image/webp" srcset="{{ asset('image/inside3.webp') }}">
            <img alt="" class="main-img" src="image/inside3.png">
        </picture>
    </div>
    <div class="container main">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form id="sp-form-1" action="{{ action('HomeController@reservationDate') }}" name="Form">
                    <table class="table-responsive confirmation-form">
                        <thead class="thead-light">    <p>@{{ total }}円</p>
                        </thead>
                        <tbody>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2"><label for="cuts">Cut</label></th>
                                <th width="3%"><label for="menscut"><input id="menscut" class="mr-1" type="checkbox" name="cuts" v-model="menscut" value="2900">Mens</label></th>
                                <th width="3%"><label for="ladiescut"><input id="ladiescut" class="mr-1" type="checkbox" name="cuts" v-model="ladiescut" value="3100">Ladies</label></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥2,900- 税込</span></td>
                                <td width="3%"><span class="charge">¥3,100- 税込</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2"><label for="perm">Perm</label></th>
                                <th width="3%"><label for="coldperm"><input  id="coldperm" class="mr-1" type="checkbox" name="perms" v-model="coldperm" value="5500">ColdPerm</label></th>
                                <th width="3%"><label for="creepperm"><input id="creepperm" class="mr-1" type="checkbox" name="perms" v-model="creepperm" value="7700">CreepPerm</label></th>
                                <th width="5%"><label for="digitalperm"><input id="digitalperm" class="mr-1" type="checkbox" name="perms" v-model="digitalperm" value="13200">DigitalPerm</label></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥<span id="perm1">5,500</span>- 税込</span></td>
                                <td width="3%"><span class="charge">¥<span id="perm2">7,700</span>- 税込</span></td>
                                <td width="5%"><span class="charge">¥<span id="perm3">13,200</span>- 税込</span></td>
                            </tr>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2">Color</th>
                                <th width="3%"><label for="graycolor"><input id="graycolor" class="mr-1" type="checkbox" name="colors" v-model="graycolor" value="4400">GrayColor</label></th>
                                <th width="3%"><label for="fashioncolor"><input id="fashioncolor" class="mr-1" type="checkbox" name="colors" v-model="fashioncolor" value="5500">FashionColor</label></th>
                                <th width="5%"><label for="designcolor"><input id="designcolor" class="mr-1" type="checkbox" name="colors" v-model="designcolor" value="12200">3D・DesignColor</label></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥<span id="color1">4,400</span>- 税込</span></td>
                                <td width="3%"><span class="charge">¥<span id="color2">5,500</span>- 税込</span></td>
                                <td width="5%"><span class="charge">¥<span id="color3">12,200</span>- 税込</span></td>
                            </tr>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2">Spa</th>
                                <th width="3%"><label for="spa30min"><input id="spa30min" class="mr-1" type="checkbox" name="spas" v-model="spa30min" value="3900">30min コース</label></th>
                                <th width="3%"><label for="spa60min"><input id="spa60min" class="mr-1" type="checkbox" name="spas" v-model="spa60min" value="7000">60min コース</label></th>
                                <th width="5%"><label for="spa90min"><input id="spa90min" class="mr-1" type="checkbox" name="spas" v-model="spa90min" value="11000" v-on:click="onDiscount2">90min コース</label></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥3,900- 税込</span></td>
                                <td width="3%"><span class="charge">¥7,000- 税込</span></td>
                                <td width="5%"><span class="charge">¥11,000- 税込</span></td>
                            </tr>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2">Treatment</th>
                                <th width="3%"><label for="treatments"><input id="treatment" class="mr-1" type="checkbox" v-model="treatment" value="2200" v-on:click="onDiscount2">Treatment</label></th>
                                <th width="3%"></th>
                                <th width="5%"></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥<span id="treat">2,200</span>- 税込</span></td>
                                <td width="3%"></td>
                                <td width="5%"></td>
                            </tr>
                        </tbody>
                    </table>
                        <table>
                            <tbody>
                                <tr>
                                    <th width="1%">
                                        <span class="fixed-output">Total</span>
                                        <span class="fixed-output2"><div id="output"></div></span>
                                    </th>
                                    <th width="2%">
                                        <span class="fixed-output3">所要時間</span>
                                        <span class="fixed-output4"><div id="output2"></div></span>
                                    </th>
                                    <th width="3.5%">
                                        <div class="back-container"><a href="{{ action('HomeController@calender') }}"><button type="button" class="btn back">◀戻る</button></a></div>
                                        <div class="next-container"><input id="next"class="btn next" type="submit" value="次へ▶" disabled></div>
                                    </th>
                                </tr>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  --}}
    {{--  <div class="img-container">
        <picture>
            <source type="image/webp" srcset="{{ asset('image/inside3.webp') }}">
            <img alt="" class="main-img" src="image/inside3.png">
        </picture>
    </div>
    <div class="container main">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form id="sp-form-1" action="{{ action('HomeController@reservationDate') }}" name="Form">
                    <table class="table-responsive confirmation-form">
                        <thead class="thead-light">
                        </thead>
                        <tbody>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2"><label for="cuts">Cut</label></th>
                                <th width="3%"><label for="menscut"><input class="mr-1" id="menscut" type="checkbox" name="cuts" value="2900" onclick="total()">Mens</label></th>
                                <th width="3%"><label for="ladiescut"><input class="mr-1" id="ladiescut" type="checkbox" name="cuts" value="3100" onclick="total()">Ladies</label></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥2,900- 税込</span></td>
                                <td width="3%"><span class="charge">¥3,100- 税込</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2"><label for="perm">Perm</label></th>
                                <th width="3%"><label for="coldperm"><input class="mr-1" id="coldperm" type="checkbox" name="perms" value="5500" onclick="total()">ColdPerm</label></th>
                                <th width="3%"><label for="creepperm"><input class="mr-1" id="creepperm" type="checkbox" name="perms" value="7700" onclick="total()">CreepPerm</label></th>
                                <th width="5%"><label for="digitalperm"><input class="mr-1" id="digitalperm" type="checkbox" name="perms" value="13200" onclick="total()">DigitalPerm</label></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥<span id="perm1">5,500</span>- 税込</span></td>
                                <td width="3%"><span class="charge">¥<span id="perm2">7,700</span>- 税込</span></td>
                                <td width="5%"><span class="charge">¥<span id="perm3">13,200</span>- 税込</span></td>
                            </tr>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2">Color</th>
                                <th width="3%"><label for="graycolor"><input class="mr-1" id="graycolor" type="checkbox" name="colors" value="4400" onclick="total()">GrayColor</label></th>
                                <th width="3%"><label for="fashioncolor"><input class="mr-1" id="fashioncolor"type="checkbox" name="colors" value="5500" onclick="total()">FashionColor</label></th>
                                <th width="5%"><label for="designcolor"><input class="mr-1" id="designcolor" type="checkbox" name="colors" value="12200" onclick="total()">3D・DesignColor</label></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥<span id="color1">4,400</span>- 税込</span></td>
                                <td width="3%"><span class="charge">¥<span id="color2">5,500</span>- 税込</span></td>
                                <td width="5%"><span class="charge">¥<span id="color3">12,200</span>- 税込</span></td>
                            </tr>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2">Spa</th>
                                <th width="3%"><label for="spa30min"><input class="mr-1" id="spa30min" type="checkbox" name="spas" value="3900" onclick="total()">30min コース</label></th>
                                <th width="3%"><label for="spa60min"><input class="mr-1" id="spa60min" type="checkbox" name="spas" value="7000" onclick="total()">60min コース</label></th>
                                <th width="5%"><label for="spa90min"><input class="mr-1" id="spa90min" type="checkbox" name="spas" value="11000" onclick="total()">90min コース</label></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥3,900- 税込</span></td>
                                <td width="3%"><span class="charge">¥7,000- 税込</span></td>
                                <td width="5%"><span class="charge">¥11,000- 税込</span></td>
                            </tr>
                            <tr>
                                <th width="2%" class="align-middle" rowspan="2">Treatment</th>
                                <th width="3%"><label for="treatments"><input class="mr-1" id="treatments" type="checkbox" name="treatments" value="2200" onclick="total()">Treatment</label></th>
                                <th width="3%"></th>
                                <th width="5%"></th>
                            </tr>
                            <tr>
                                <td width="3%"><span class="charge">¥<span id="treat">2,200</span>- 税込</span></td>
                                <td width="3%"></td>
                                <td width="5%"></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" id="cut" name="cut" value="{{ old('cut') }}">
                    <input type="hidden" id="perm" name="perm" value="{{ old('perm') }}">
                    <input type="hidden" id="color" name="color" value="{{ old('color') }}">
                    <input type="hidden" id="spa" name="spa" value="{{ old('spa') }}">
                    <input type="hidden" id="treatment" name="treatment" value="{{ old('treatment') }}">
                    <input type="hidden" id="price" name="price" placeholder="合計" value="{{ old('price') }}">
                    <input type="hidden" id="length_of_time" name="length_of_time" value="{{ old('length_of_time') }}" >

                        <table>
                            <tbody>
                                <tr>
                                    <th width="1%">
                                        <span class="fixed-output">Total</span>
                                        <span class="fixed-output2"><div id="output"></div></span>
                                    </th>
                                    <th width="2%">
                                        <span class="fixed-output3">所要時間</span>
                                        <span class="fixed-output4"><div id="output2"></div></span>
                                    </th>
                                    <th width="3.5%">
                                        <div class="back-container"><a href="{{ action('HomeController@calender') }}"><button type="button" class="btn back">◀戻る</button></a></div>
                                        <div class="next-container"><input id="next"class="btn next" type="submit" value="次へ▶" disabled></div>
                                    </th>
                                </tr>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>  --}}
    <div id="reservation">
        <img alt="" class="main-img" src="image/inside3.png">
        <thead class="thead-light"> @{{ checkedNumbers }}<p>@{{ sum }}円</p>
        </thead>
        {{--  <input type="checkbox" id="10" value="10" v-model="checkedNumbers">
        <label for="jack">10</label>
        <input type="checkbox" id="20" value="20" v-model="checkedNumbers">
        <label for="john">20</label>
        <input type="checkbox" id="30" value="30" v-model="checkedNumbers">
        <label for="mike">30</label>
        <br>  --}}
        <form id="sp-form-1" action="{{ action('HomeController@reservationDate') }}" name="Form">
            <table class="table-responsive confirmation-form">
                <thead class="thead-light">    <p>@{{ total }}円</p>
                </thead>
                <tbody>
                    <tr>
                        <th width="2%" class="align-middle" rowspan="2"><label for="cuts">Cut</label></th>
                        <th width="3%"><label for="menscut"><input id="menscut" class="mr-1" type="checkbox" name="cuts" v-model="checkedNumbers" value="2900">Mens</label></th>
                        <th width="3%"><label for="ladiescut"><input id="ladiescut" class="mr-1" type="checkbox" name="cuts" v-model="checkedNumbers" value="3100">Ladies</label></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td width="3%"><span class="charge">¥2,900- 税込</span></td>
                        <td width="3%"><span class="charge">¥3,100- 税込</span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th width="2%" class="align-middle" rowspan="2"><label for="perm">Perm</label></th>
                        <th width="3%"><label for="coldperm"><input  id="coldperm" class="mr-1" type="checkbox" name="perms" v-model="checkedNumbers" value="5500">ColdPerm</label></th>
                        <th width="3%"><label for="creepperm"><input id="creepperm" class="mr-1" type="checkbox" name="perms" v-model="checkedNumbers" value="7700">CreepPerm</label></th>
                        <th width="5%"><label for="digitalperm"><input id="digitalperm" class="mr-1" type="checkbox" name="perms" v-model="checkedNumbers" value="13200">DigitalPerm</label></th>
                    </tr>
                    <tr>
                        <td width="3%"><span class="charge">¥<span id="perm1">5,500</span>- 税込</span></td>
                        <td width="3%"><span class="charge">¥<span id="perm2">7,700</span>- 税込</span></td>
                        <td width="5%"><span class="charge">¥<span id="perm3">13,200</span>- 税込</span></td>
                    </tr>
                    <tr>
                        <th width="2%" class="align-middle" rowspan="2">Color</th>
                        <th width="3%"><label for="graycolor"><input id="graycolor" class="mr-1" type="checkbox" name="colors" v-model="checkedNumbers" value="4400">GrayColor</label></th>
                        <th width="3%"><label for="fashioncolor"><input id="fashioncolor" class="mr-1" type="checkbox" name="colors" v-model="checkedNumbers" value="5500">FashionColor</label></th>
                        <th width="5%"><label for="designcolor"><input id="designcolor" class="mr-1" type="checkbox" name="colors" v-model="checkedNumbers" value="12200">3D・DesignColor</label></th>
                    </tr>
                    <tr>
                        <td width="3%"><span class="charge">¥<span id="color1">4,400</span>- 税込</span></td>
                        <td width="3%"><span class="charge">¥<span id="color2">5,500</span>- 税込</span></td>
                        <td width="5%"><span class="charge">¥<span id="color3">12,200</span>- 税込</span></td>
                    </tr>
                    <tr>
                        <th width="2%" class="align-middle" rowspan="2">Spa</th>
                        <th width="3%"><label for="spa30min"><input id="spa30min" class="mr-1" type="checkbox" name="spas" v-model="checkedNumbers" value="3900">30min コース</label></th>
                        <th width="3%"><label for="spa60min"><input id="spa60min" class="mr-1" type="checkbox" name="spas" v-model="checkedNumbers" value="7000">60min コース</label></th>
                        <th width="5%"><label for="spa90min"><input id="spa90min" class="mr-1" type="checkbox" name="spas" v-model="checkedNumbers" value="11000">90min コース</label></th>
                    </tr>
                    <tr>
                        <td width="3%"><span class="charge">¥3,900- 税込</span></td>
                        <td width="3%"><span class="charge">¥7,000- 税込</span></td>
                        <td width="5%"><span class="charge">¥11,000- 税込</span></td>
                    </tr>
                    <tr>
                        <th width="2%" class="align-middle" rowspan="2">Treatment</th>
                        <th width="3%"><label for="treatments"><input id="treatment" class="mr-1" type="checkbox" v-model="checkedNumbers" value="2200">Treatment</label></th>
                        <th width="3%"></th>
                        <th width="5%"></th>
                    </tr>
                    <tr>
                        <td width="3%"><span class="charge">¥<span id="treat">2,200</span>- 税込</span></td>
                        <td width="3%"></td>
                        <td width="5%"></td>
                    </tr>
                </tbody>
            </table>

            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#reservation',
            data: {
                checkedNumbers: []
              },
              {{--  computed: {
                  sum() {
                    return this.checkedNumbers.reduce(function (a, b) {
                      return parseInt(a) + parseInt(b);
                  }, 0);
                }
              }  --}}
        })
    </script>


@endsection


