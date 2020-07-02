
@extends('layouts.front4')

@section('content')
<link href="{{ asset('css/PC/reservation_plan.css') }}" rel="stylesheet">

<div class="img-container">
    <img alt="" class="main-img" src="{{ asset('image/inside3.png') }}">
</div>
<div class="container main">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <form id="sp-form-1" action="{{ action('HomeController@reservationDate') }}" method="POST" name="Form">
                {{ csrf_field() }}
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
                            <th width="3%"><label for="graycolor"><input class="mr-1" id="graycolor" type="checkbox" name="colors" value="450" onclick="total()">GrayColor</label></th>
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
                <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
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
                                    <div class="next-container"><input id="next"class="btn next" type="submit" value="次へ▶"></div>
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


{{-- <div class="text-center">
    <div class="mx-2 my-1 mb-2 float-right">
        <a type="button" class="btn back" href="{{ action('HomeController@calender') }}">◀戻る</a>
        <input id="next"class="btn next" type="submit" value="次へ▶">
    </div>
    <ul class="output-container float1">
        <li class="fixed-output">
            Total
        </li>
        <li class="fixed-output">
            <div class="pl-4" id="output"></div>
        </li>
        <li class="fixed-output2">
            所要時間
        </li>
        <li class="fixed-output2">
            <div class="pl-4" id="output2"></div>
        </li>
    </ul>
    <input type="reset" class="btn btn-danger ml-5" value="やり直し">
</div> --}}

@endsection
