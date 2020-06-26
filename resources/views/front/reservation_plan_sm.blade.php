
@extends('layouts.front3')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $(function(){
            //.accordion_oneの中の.accordion_headerがクリックされたら
            $('.s_03 .accordion_one .accordion_header').click(function(){
              //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
              $(this).next('.accordion_inner').slideToggle();
              $(this).toggleClass("open");
            });
          });
    </script>
    <style>
        .s_03 .accordion_one {
            max-width: 1024px;
            margin: 0 auto;
        }
        .s_03 .accordion_one .accordion_header {
            background-color: #db0f2f;
            color: #fff;
            font-size: 26px;
            font-weight: bold;
            padding: 20px 11%;
            text-align: center;
            position: relative;
            z-index: +1;
            cursor: pointer;
            transition-duration: 0.2s;
        }
        .s_03 .accordion_one:nth-of-type(2) .accordion_header {
            background-color: #ff9a05;
        }
        .s_03 .accordion_one:nth-of-type(3) .accordion_header {
            background-color: #1c85d8;
        }
        .s_03 .accordion_one:nth-of-type(4) .accordion_header {
            background-color: #25d81c;
        }
        .s_03 .accordion_one:nth-of-type(5) .accordion_header {
            background-color: #bc1cd8;
        }
        .s_03 .accordion_one .accordion_header:hover {
            opacity: .8;
        }
        .s_03 .accordion_one .accordion_header .i_box {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 50%;
            right: 5%;
            width: 40px;
            height: 40px;
            border: 1px solid #fff;
            margin-top: -20px;
            box-sizing: border-box;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            transform-origin: center center;
            transition-duration: 0.2s;
        }
        .s_03 .accordion_one .accordion_header.stay .i_box {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .s_03 .accordion_one .accordion_header .i_box .one_i {
            display: block;
            width: 18px;
            height: 18px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            transform-origin: center center;
            transition-duration: 0.2s;
            position: relative;
        }
        .s_03 .accordion_one .accordion_header.stay .i_box .one_i {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .s_03 .accordion_one .accordion_header.stay.open .i_box .one_i {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .s_03 .accordion_one .accordion_header.open .i_box {
            -webkit-transform: rotate(-360deg);
            transform: rotate(-360deg);
        }
        .s_03 .accordion_one .accordion_header.stay.open .i_box {
            -webkit-transform: rotate(315eg);
            transform: rotate(315deg);
        }
        .s_03 .accordion_one .accordion_header .i_box .one_i:before, .s_03 .accordion_one .accordion_header .i_box .one_i:after {
            display: flex;
            content: '';
            background-color: #fff;
            border-radius: 10px;
            width: 18px;
            height: 4px;
            position: absolute;
            top: 7px;
            left: 0;
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            transform-origin: center center;
        }
        .s_03 .accordion_one .accordion_header .i_box .one_i:before {
            width: 4px;
            height: 18px;
            top: 0;
            left: 7px;
        }
        .s_03 .accordion_one .accordion_header.stay .i_box .one_i:before {
            content: none;
        }
        .s_03 .accordion_one .accordion_header.open .i_box .one_i:before {
            content: none;
        }
        .s_03 .accordion_one .accordion_header.stay.open .i_box .one_i:before {
            content: "";
        }
        .s_03 .accordion_one .accordion_header.open .i_box .one_i:after {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        .s_03 .accordion_one .accordion_header.stay.open .i_box .one_i:after {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .s_03 .accordion_one .accordion_inner {
            display: none;
            padding: 15px 15px;
            border-left: 2px solid #db0f2f;
            border-right: 2px solid #db0f2f;
            border-bottom: 2px solid #db0f2f;
            box-sizing: border-box;
        }
        .s_03 .accordion_one .accordion_inner.stay {
            display: block;
        }
        .s_03 .accordion_one:nth-of-type(2) .accordion_inner {
            border-left: 2px solid #ff9a05;
            border-right: 2px solid #ff9a05;
            border-bottom: 2px solid #ff9a05;
        }
        .s_03 .accordion_one:nth-of-type(3) .accordion_inner {
            border-left: 2px solid #1c85d8;
            border-right: 2px solid #1c85d8;
            border-bottom: 2px solid #1c85d8;
        }
        .s_03 .accordion_one:nth-of-type(4) .accordion_inner {
            border-left: 2px solid #25d81c;;
            border-right: 2px solid #25d81c;;
            border-bottom: 2px solid #25d81c;;
        }
        .s_03 .accordion_one:nth-of-type(5) .accordion_inner {
            border-left: 2px solid #1c85d8;
            border-right: 2px solid #1c85d8;
            border-bottom: 2px solid #1c85d8;
        }


        .s_03 .accordion_one .accordion_inner .box_one {
            height: 150px;
        }


        .s_03 .accordion_one .accordion_inner p.txt_ac {
            margin: 0;
        }
        @media screen and (max-width: 1024px) {
            .s_03 .accordion_one .accordion_header {
                font-size: 18px;
            }
            .s_03 .accordion_one .accordion_header .i_box {
                width: 30px;
                height: 30px;
                margin-top: -15px;
            }
        }
        @media screen and (max-width: 767px) {
            .s_03 .accordion_one .accordion_header {
                font-size: 16px;
                text-align: left;
                padding: 15px 60px 15px 15px;
            }
        }


        ul {
            list-style-type: none;
            padding-left: 0;
            font-weight: 600;
            font-size: 16px
        }
        .float1 li {
            height: 50px;
            {{--  padding: 20px;  --}}
            {{--  padding-right: 30px;  --}}

        }
        .float1 {
            margin: auto;
        }
        .float1 li {
            float: left;
        }

        .main-img {

            object-fit: cover;
            width: 100%;
            object-position: 50% 100%
        }


        input[type=checkbox] {
            width:			10px;
            height:			10px;
            -moz-transform:		scale(1.4);
            -webkit-transform:	scale(1.4);
            transform:		scale(1.4);
            margin-top: 0px;
            vertical-align:0.08em;

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


<div class="section s_03">
    <form id="sp-form-1" action="{{ action('HomeController@reservationDate') }}" method="POST" name="Form">
        {{ csrf_field() }}
        <div class="accordion_one">
            <div class="accordion_header stay">Cut
                <div class="i_box"><i class="one_i"></i>
                </div>
            </div>
            <div class="accordion_inner stay">
                <div class="box_one">
                    <ul class="float1">
                        <li class="mr-5"><label for="menscut"><input class="mr-2" id="menscut" type="checkbox" name="cuts" value="2900" onclick="total()">Mens</label></li>
                        <li  class="float-right">¥2,900- 税込<span class="ml-4">30分</span></li>
                    </ul>
                    <ul class="float1">
                        <li class="mr-5"><label for="ladiescut"><input class="mr-2" id="ladiescut" type="checkbox" name="cuts" value="3100" onclick="total()">Ladies</label></li>
                        <li  class="float-right">¥3,100- 税込<span class="ml-4">60分</span></li>
                    </ul>
                </div>
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
                    <ul class="float1">
                        <li class="mr-3"><label for="coldperm"><input class="mr-2" id="coldperm" type="checkbox" name="perms" value="5500" onclick="total()">ColdPerm</label></li>
                        <li  class="float-right">¥<span id="perm1">5,500</span>- 税込<span class="ml-4">90分</span></li>
                    </ul>
                    <ul class="float1">
                        <li class="mr-3"><label for="creepperm"><input class="mr-2" id="creepperm" type="checkbox" name="perms" value="7700" onclick="total()">CreepPerm</label></li>
                        <li  class="float-right">¥<span id="perm2">7,700</span>- 税込<span class="ml-3">150分</span></li>
                    </ul>
                    <ul class="float1">
                        <li class="mr-"><label for="digitalperm"><input class="mr-2" id="digitalperm" type="checkbox" name="perms" value="13200" onclick="total()">DigitalPerm</label></li>
                        <li  class="float-right">¥<span id="perm3">13,200</span>- 税込<span class="ml-3">180分</span></li>
                    </ul>
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
                    <ul class="float1">
                        <li class="mr-3"><label for="graycolor"><input class="mr-1" id="graycolor" type="checkbox" name="colors" value="4400" onclick="total()">GrayColor</label></li>
                        <li  class="float-right">¥<span id="perm1">4,400</span>- 税込<span class="ml-4">60分</span></li>
                    </ul>
                    <ul class="float1">
                        <li class="mr-3"><label for="fashioncolor"><input class="mr-1" id="fashioncolor"type="checkbox" name="colors" value="5500" onclick="total()">FashonColor</label></li>
                        <li  class="float-right">¥<span id="perm2">5,500</span>- 税込<span class="ml-4">90分</span></li>
                    </ul>
                    <ul class="float1">
                        <li class="mr-"><label for="designcolor"><input class="mr-1" id="designcolor" type="checkbox" name="colors" value="13200" onclick="total()">3D-D<span class="design">esign</span>Color</label></li>
                        <li  class="float-right">¥<span id="perm3">12,200</span>- 税込<span class="ml-3">150分</span></li>
                        <li class="mr-"></li>
                    </ul>
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
                    <ul class="float1">
                        <li class="mr-3"><label for="spa30min"><input class="mr-2" id="spa30min" type="checkbox" name="spas" value="3900" onclick="total()">30min コース</label></li>
                        <li  class="float-right">¥<span id="perm1">3,900</span>- 税込<span class="ml-4">30分</span></li>
                    </ul>
                    <ul class="float1">
                        <li class="mr-3"><label for="spa60min"><input class="mr-2" id="spa60min" type="checkbox" name="spas" value="7000" onclick="total()">60min コース</label></li>
                        <li  class="float-right">¥<span id="perm2">7,000</span>- 税込<span class="ml-4">60分</span></li>
                    </ul>
                    <ul class="float1">
                        <li class="mr-"><label for="spa90min"><input class="mr-2" id="spa90min" type="checkbox" name="spas" value="11000" onclick="total()">90min コース</label></li>
                        <li  class="float-right">¥<span id="perm3">11,000</span>- 税込<span class="ml-4">90分</span></li>
                    </ul>
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
                    <ul class="float1">
                        <li class="mr-3"><label for="treatments"><input class="mr-2" id="treatments" type="checkbox" name="treatments" value="2200" onclick="total()">Treatment</label></li>
                        <li  class="float-right">¥<span id="treat">2,200</span>- 税抜き<span class="ml-4">30分</span></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <input type="hidden" id="cut" name="cut" value="{{ old('cut') }}">
        <input type="hidden" id="perm" name="perm" value="{{ old('perm') }}">
        <input type="hidden" id="color" name="color" value="{{ old('color') }}">
        <input type="hidden" id="spa" name="spa" value="{{ old('spa') }}">
        <input type="hidden" id="treatment" name="treatment" value="{{ old('treatment') }}"> --}}
        <input type="hidden" id="price" name="price" placeholder="合計" value="{{ old('price') }}">
        <input type="hidden" id="length_of_time" name="length_of_time" value="{{ old('length_of_time') }}" >
        {{-- <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}"> --}}
        <div class="container plan-footer-container">
            <ul class="float1">
                <li class="back-container">
                    <a type="button" class="btn back" href="{{ action('HomeController@calender') }}">◀戻る</a>
                </li>
                <li class="">
                    <input id="next"class="btn next" type="submit" value="次へ▶">
                </li>
            </ul>
            <ul class="output-container">
                <li class="fixed-output">
                    Total<div id="output"></div>
                </li>
                <li class="fixed-output2">
                    <div id="output2"></div>
                </li>
            </ul>
        </div>
    </form>
</div>

@endsection
