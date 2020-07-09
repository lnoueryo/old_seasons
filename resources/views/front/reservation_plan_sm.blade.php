

@extends('layouts.front3')

@section('content')

<div class="section s_03">
    <form id="sp-form-1" action="{{ action('HomeController@reservationDateSM') }}" method="POST" name="Form">
        {{ csrf_field() }}
        <div class="accordion_one">
            <div class="accordion_header stay">Cut
                <div class="i_box"><i class="one_i"></i>
                </div>
            </div>
            <div class="accordion_inner stay">
                <div class="box_one">
                     <table>
                        <tbody>
                            <tr>
                                <th width="20%"><input class="mr-1" id="menscut" type="checkbox" name="cuts" value="2900" onclick="total()">
                                    <label for="menscut"><span>Mens</span></label>
                                    <label class="float-right" for="menscut"><span>¥2,900- 税込</span></label>
                                </th>
                                <th width="5%">
                                    <label for="menscut" class="float-right"><span>30分</span></label>
                                </th>
                            </tr>
                            <tr>
                                <th width="20%"><input class="mr-1" id="ladiescut" type="checkbox" name="cuts" value="3100" onclick="total()">
                                    <label for="ladiescut"><span>Ladies</span></label>
                                    <label class="float-right" for="ladiescut"><span>¥3,100- 税込</span></label>
                                </th>
                                <th width="2%">
                                    <label for="ladiescut" class="float-right"><span>60分</span></label>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>カットと同時に<span>カラー</span>、<span>パーマ</span>で最大1600円off‼</div>
            </div>
        </div>

        <div class="accordion_one">
            <div class="accordion_header">Perm
                <div class="i_box">
                    <i class="one_i"></i>
                </div>
            </div>
            <div class="accordion_inner">
                <div class="box_one">
                    <table>
                        <tbody>
                        <tr>
                            <th width="20%"><input class="mr-1" id="coldperm" type="checkbox" name="perms" value="5500" onclick="total()">
                                <label for="coldperm"><span>ColdPerm</span></label>
                                <label class="float-right" for="coldperm">¥<span id="perm1">5,500</span>- 税込</label>
                            </th>
                            <th width="5%">
                                <label for="coldperm" class="float-right"><span>90分</span></label>
                            </th>
                        </tr>
                        <tr>
                            <th width="20%"><input class="mr-1" id="creepperm" type="checkbox" name="perms" value="7700" onclick="total()">
                                <label for="creepperm"><span>ColdPerm</span></label>
                                <label class="float-right" for="creepperm">¥<span id="perm2">7,700</span>- 税込</label>
                            </th>
                            <th width="5%">
                                <label for="creepperm" class="float-right"><span>150分</span></label>
                            </th>
                        </tr>
                        <tr>
                            <th width="20%"><input class="mr-1" id="digitalperm" type="checkbox" name="perms" value="7700" onclick="total()">
                                <label for="digitalperm"><span>DigitalPerm</span></label>
                                <label class="float-right" for="digitalperm">¥<span id="perm3">13,200</span>- 税込</label>
                            </th>
                            <th width="5%">
                                <label for="digitalperm" class="float-right"><span>180分</span></label>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="accordion_one">
            <div class="accordion_header">Color
                <div class="i_box"><i class="one_i"></i>
                </div>
            </div>
            <div class="accordion_inner">
                <div class="box_one">
                    <table>
                        <tbody>
                            <tr>
                                <th width="20%"><input class="mr-1" id="graycolor" type="checkbox" name="colors" value="4400" onclick="total()">
                                    <label for="graycolor"><span>GrayColor</span></label>
                                    <label class="float-right" for="graycolor">¥<span id="color1">4,400</span>- 税込</label>
                                </th>
                                <th width="5%">
                                    <label for="graycolor" class="float-right"><span>60分</span></label>
                                </th>
                            </tr>
                            <tr>
                                <th width="20%"><input class="mr-1" id="fashioncolor"type="checkbox" name="colors" value="5500" onclick="total()">
                                    <label for="fashioncolor"><span>FashonColor</span></label>
                                    <label class="float-right" for="fashioncolor">¥<span id="color2">5,500</span>- 税込</label>
                                </th>
                                <th width="5%">
                                    <label for="fashioncolor" class="float-right"><span>90分</span></label>
                                </th>
                            </tr>
                            <tr>
                                <th width="20%"><input class="mr-1" id="designcolor" type="checkbox" name="colors" value="13200" onclick="total()">
                                    <label for="designcolor"><span>3D-DesignColor</span></label>
                                    <label class="float-right" for="designcolor">¥<span id="color3">12,200</span>- 税込</label>
                                </th>
                                <th width="5%">
                                    <label for="designcolor" class="float-right"><span>150分</span></label>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="accordion_one">
            <div class="accordion_header">Spa
                <div class="i_box">
                    <i class="one_i"></i>
                </div>
            </div>
            <div class="accordion_inner">
                <div class="box_one">
                    <table>
                        <tbody>
                            <tr>
                                <th width="20%"><input class="mr-1" id="spa30min" type="checkbox" name="spas" value="3900" onclick="total()">
                                    <label for="spa30min"><span>30min コース</span></label>
                                    <label class="float-right" for="spa30min">¥<span id="spa30">3,900</span>- 税込</label>
                                </th>
                                <th width="5%">
                                    <label for="spa30min" class="float-right"><span>30分</span></label>
                                </th>
                            </tr>
                            <tr>
                                <th width="20%"><input class="mr-1" id="spa60min" type="checkbox" name="spas" value="7000" onclick="total()">
                                    <label for="spa60min"><span>60min コース</span></label>
                                    <label class="float-right" for="spa60min">¥<span id="spa60">7,000</span>- 税込</label>
                                </th>
                                <th width="5%">
                                    <label for="spa60min" class="float-right"><span>60分</span></label>
                                </th>
                            </tr>
                            <tr>
                                <th width="20%"><input class="mr-1" id="spa90min" type="checkbox" name="spas" value="11000" onclick="total()">
                                    <label for="spa90min"><span>90min コース</span></label>
                                    <label class="float-right" for="spa90min">¥<span id="spa90">11,000</span>- 税込</label>
                                </th>
                                <th width="5%">
                                    <label for="spa90min" class="float-right"><span>90分</span></label>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="accordion_one">
            <div class="accordion_header">Treatment
                <div class="i_box"><i class="one_i"></i>
                </div>
            </div>
            <div class="accordion_inner">
                <div class="box_one">
                    <table>
                        <tbody>
                            <tr>
                                <th width="20%"><input class="mr-1" id="treatments" type="checkbox" name="treatments" value="2200" onclick="total()">
                                    <label for="treatments"><span>30min コース</span></label>
                                    <label class="float-right" for="treatments">¥<span id="treat">2,200</span>- 税込</label>
                                </th>
                                <th width="5%">
                                    <label for="treatments" class="float-right"><span>30分</span></label>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <input type="hidden" id="cut" name="cut" value="{{ old('cut') }}">
        <input type="hidden" id="perm" name="perm" value="{{ old('perm') }}">
        <input type="hidden" id="color" name="color" value="{{ old('color') }}">
        <input type="hidden" id="spa" name="spa" value="{{ old('spa') }}">
        <input type="hidden" id="treatment" name="treatment" value="{{ old('treatment') }}">
        <input type="hidden" id="price" name="price" placeholder="合計" value="{{ old('price') }}">
        <input type="hidden" id="length_of_time" name="length_of_time" value="{{ old('length_of_time') }}" >
        <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">

        <table>
            <tbody class="plan-footer-container">
                <tr>
                    <th width="3%">
                        <span class="fixed-output">Total</span>
                        <span class="fixed-output2"><div id="output"></div></span>
                    </th>
                    <th width="2%">
                        <div class="fixed-output3"><div id="output2"></div></div>
                    </th>
                    <th width="3.5%">
                        <div class="float-left back-container"><a href="{{ action('HomeController@calender') }}"><button type="button" class="btn back">◀戻る</button></a></div>
                        <div class="float-right next-container"><input id="next"class="btn next" type="submit" value="次へ▶"></div>
                    </th>
                </tr>
            </tbody>
        </table>
    </form>
</div>

{{--  <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/jquery-ui.js"></script>  --}}
<link href="{{ asset('css/media/reservation_plan_sm.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        function total() {
            yen = 0;
            time = 0;
            const array = [0,30,60,90,150,180,60,90,150,30,60,90,30]
            for (i=1; i< document.Form.length-1; i++) {

                    if (document.Form.elements[i].checked) {

                        if($("#menscut").prop("checked") == true) {
                            $('#coldperm').val(3900);
                            $('#creepperm').val(6100);
                            $('#digitalperm').val(11600);

                            $('#graycolor').val(2800);
                            $('#fashioncolor').val(3900);
                            $('#designcolor').val(10600);

                            if ($("#spa90min").prop("checked") == true){
                                $('#treatments').val(0);
                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            } else if ($("#spa90min").prop("checked") == false){
                                $('#treatments').val(2200);
                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            } else {

                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            }

                        } else if($("#ladiescut").prop("checked") == true) {
                            $('#coldperm').val(4000);
                            $('#creepperm').val(6200);
                            $('#digitalperm').val(11700);

                            $('#graycolor').val(2900);
                            $('#fashioncolor').val(4000);
                            $('#designcolor').val(10700);

                            if ($("#spa90min").prop("checked") == true){
                                $('#treatments').val(0);
                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            } else if ($("#spa90min").prop("checked") == false){
                                $('#treatments').val(2200);
                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            } else {

                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            }
                        } else if ($("#menscut").prop("checked") == false && $("#ladiescut").prop("checked") == false) {
                            $('#coldperm').val(5500);
                            $('#creepperm').val(7700);
                            $('#digitalperm').val(13200);

                            $('#graycolor').val(4400);
                            $('#fashioncolor').val(5500);
                            $('#designcolor').val(12200);

                            if ($("#spa90min").prop("checked") == true){
                                $('#treatments').val(0);
                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            } else if ($("#spa90min").prop("checked") == false){
                                $('#treatments').val(2200);
                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            } else {

                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            }
                        }  else {
                            if ($("#spa90min").prop("checked") == true){
                                $('#treatments').val(0);
                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            } else if ($("#spa90min").prop("checked") == false){
                                $('#treatments').val(2200);
                                yen += eval(document.Form.elements[i].value);
                                time += array[i];
                            } else {

                                yen += eval(document.Form.elements[i].value);
                                 time += array[i];
                            }

                    }

                }}

            document.Form.price.value = yen + '円';
            if (time === 30 || time === 0) {
            document.Form.length_of_time.value = time + '分';
            } else if(time === 0) {
            document.Form.length_of_time.value = time;
            } else {
            document.Form.length_of_time.value = time/60 + '時間';
            }

            }
            document.getElementById('Form').onsubmit = function() {
                const search = document.getElementById('Form').price.value;
                document.getElementById('Form').prices.value = `${search} +1000`
            };



    </script>

    <style>



        .float li {
            height: 50px;
            {{--  padding: 20px;  --}}
            {{--  padding-right: 30px;  --}}

        }
        .float {
            margin: auto;
        }


        .main-img {

            object-fit: cover;
            width: 100%;
            object-position: 50% 100%
        }

        .abc {
            padding-right: 50px;
            margin-right: 10px;
        }


    </style>
@endsection
