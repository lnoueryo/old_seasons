
@extends('layouts.front3')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        table {
            transform: translate3d(0,-100px,0);
        background-color: rgba(240, 248, 255, 0.544);
        }
    </style>
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

<div class="container pc-plan-container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="">
                <form id="sp-form-1" action="{{ action('HomeController@reservationDate') }}" method="POST" name="Form">
                    {{ csrf_field() }}
                    <div class="">
                        <table class="contact-form table-responsive plan-table">
                            <thead class="thead-light">
                                <tr>
                                    <th colspan="16">SeaSons Plan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="align-middle" rowspan="2"><label for="cuts">Cut</label></th>
                                    <th width="25%"><input id="menscut" type="checkbox" name="cuts" value="2900" onclick="total()">Mens</th>
                                    <th width="25%"><input id="ladiescut" type="checkbox" name="cuts" value="3100" onclick="total()">Ladies</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th width="25%">¥2,900- 税抜き</th>
                                    <th width="25%">¥3,100- 税抜き</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th class="align-middle" rowspan="2"><label for="perm">Perm</label></th>
                                    <th width="25%"><input id="coldperm" type="checkbox" name="perms" value="5500" onclick="total()">ColdPerm</th>
                                    <th width="25%"><input id="creepperm" type="checkbox" name="perms" value="7700" onclick="total()">CreepPerm</th>
                                    <th width="25%"><input id="digitalperm" type="checkbox" name="perms" value="13200" onclick="total()">DigitalPerm</th>
                                </tr>
                                <tr>
                                    <th width="40%">¥<span id="perm1">5,500</span>- 税抜き</th>
                                    <th width="40%">¥<span id="perm2">7,700</span>- 税抜き</th>
                                    <th width="40%">¥<span id="perm3">13,200</span>- 税抜き</th>
                                </tr>
                                <tr>
                                    <th class="align-middle" rowspan="2">Color</th>
                                    <th width="25%"><input id="graycolor" type="checkbox" name="colors" value="4400" onclick="total()">GrayColor</th>
                                    <th width="25%"><input id="fashioncolor"type="checkbox" name="colors" value="5500" onclick="total()">FashonColor</th>
                                    <th width="25%"><input id="designcolor" type="checkbox" name="colors" value="12200" onclick="total()">3D・DesignColor</th>
                                </tr>
                                <tr>
                                    <th width="40%">¥4,400- 税抜き</th>
                                    <th width="40%">¥5,500- 税抜き</th>
                                    <th width="40%">¥12,200- 税抜き</th>
                                </tr>
                                <tr>
                                    <th class="align-middle" rowspan="2">Spa</th>
                                    <th width="25%"><input id="spa30min" type="checkbox" name="spas" value="3900" onclick="total()">30min コース</th>
                                    <th width="25%"><input id="spa60min" type="checkbox" name="spas" value="7000" onclick="total()">60min コース</th>
                                    <th width="25%"><input id="spa90min" type="checkbox" name="spas" value="11000" onclick="total()">90min コース</th>
                                </tr>
                                <tr>
                                    <th width="40%">¥3,900- 税抜き</th>
                                    <th width="40%">¥7,000- 税抜き</th>
                                    <th width="40%">¥11,000- 税抜き</th>
                                </tr>
                                <tr>
                                    <th class="align-middle" rowspan="2">Treatment</th>
                                    <th width="25%"><input id="treatments" type="checkbox" name="treatments" value="2200" onclick="total()">Treatment</th>
                                    <th width="25%"></th>
                                    <th width="25%"></th>
                                </tr>
                                <tr>
                                    <th width="40%">¥<span id="treat">2,200</span>- 税抜き</th>
                                    <th width="40%"></th>
                                    <th width="40%"></th>
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
                    </div>
                </div>
                <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">

                        <div class="text-center">
                            <div class="mx-2 my-1 mb-2 float-right">
                                <a type="button" class="btn back" href="{{ action('HomeController@calender') }}">◀戻る</a>
                                <input id="next"class="btn next" type="submit" value="次へ▶">
                            </div>
                            <ul class="price-length float-left my-1">
                                <li class="mx-">
                                    <div id="output"></div>
                                </li>
                                <li class="">
                                    <div id="output2"></div>
                                </li>
                                {{--  <input type="reset" class="btn btn-danger ml-5" value="やり直し">  --}}

                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
