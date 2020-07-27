
@extends('layouts.front3')

@section('content')
<link href="{{ asset('css/PC/reservation_date.css') }}" rel="stylesheet">
    <style>

        .disabled {
            pointer-events: none;
            color: black;
        }

        body {
            font-size: 1.3rem;
            font-family: "03スマートフォントUI", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", Arial, sans-serif, "Lobster",cursive;
            line-height: 1.5;
            color: rgb(51, 51, 51);
            background-image: linear-gradient(to right bottom, rgb(216, 235, 234), rgb(255, 245, 234));
            text-align: left;
            padding-top: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            margin-top: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            overflow-wrap: break-word;
        }

    </style>
<div id="app2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div id="tabBoxes">
                    <div id="tabBox3">
                        <form id="sp-form-1" name="Form">
                            @include('components.calender', ['cut' => $booking->cut, 'perm' => $booking->perm, 'color' => $booking->color, 'treatment' => $booking->treatment, 'spa' => $booking->spa, 'price' => $booking->price, 'length_of_time' => $booking->length_of_time])
                        </form>
                    </div>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th width="1%">
                                <span class="fixed-output">Total</span>
                                <span class="fixed-output2">{{ $booking->price }}</span>
                            </th>
                            <th width="2%">
                                <span class="fixed-output3">所要時間</span>
                                <span class="fixed-output4">{{ $booking->length_of_time }}</span>
                            </th>
                            <th width="3.5%">
                                <div class="back-container"><a href="{{ action('HomeController@reservationPlan', ['cut' => $booking->cut, 'perm' => $booking->perm, 'color' => $booking->color, 'treatment' => $booking->treatment, 'spa' => $booking->spa, 'price' => $booking->price, 'length_of_time' => $booking->length_of_time]) }}">
                                    <button id="back-pc" type="button" class="btn back">◀戻る</button></a></div>
                                <div class="next-container"><a href="{{ action('HomeController@calender') }}"><button type="button" id="cancel"class="btn cancel">取消</button></a></div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        <script>
            const booking = @json($json);
            const bookingController = @json($json2);
            const bookingController2 = @json($json3);
            const dateArray = @json($dateArray);
            console.log(booking[0].length_of_time);
            console.log($('form[name="Form"] input').eq(270).val());

            function getServerDate(callback){
                $.ajax({
                    type : 'HEAD',
                    url :  window.location.href,
                    cache : false
                }).done(function(data, textStatus, xhr) {
                    try {
                        var result = new Date(xhr.getResponseHeader("Date"));
                    } catch(e) {
                        var result = new Date();
                    }
                    callback(result);
                }).fail(function() {
                    var result = new Date();
                    callback(result);
                });
            }
            function makeHTML(result){
                const month = result.getMonth() + 1;
                const day = String(result.getDate()).padStart(2,'0');
                const hour = result.getHours();
                const twoHours = String(result.getHours()+2).padStart(2,'0');
                const min = String(result.getMinutes()).padStart(2,'0');
                const now = `${month}${day}${hour}${min}`;
                const twoHoursFromNow = `${month}${day}${twoHours}${min}`;

                for (var i = 0; i < document.Form.length - 1; i++) {
                    var placeholder = $('form[name="Form"] input').eq(i).attr("placeholder");
                    if (placeholder < twoHoursFromNow) {

                                $('form[name="Form"] input').eq(i).val("×").css({
                                    'color': '#696969',
                                    'font-weight': '600'
                                  });
                                $('form[name="Form"] input').eq(i).attr('disabled', true);

                    }
                  }
                console.log(twoHoursFromNow);
            }
            getServerDate(makeHTML);
            // ↓カレンダー値別カラー↓
            window.onload = function () {
                $('#tabBox3 input[value="×"]').css({
                    'color': '#696969',
                    'font-weight': '600'
                  });
                  $('#tabBox3 input[value="〇"]').css({
                    'color': '#d84b6a',
                    'font-weight': '600'
                  });
            };
            // ↑カレンダー値別カラー↑



        </script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="{{ asset('js/calender.min.js') }}" defer></script>
        <script src="{{ asset('js/vue.js') }}" defer></script>

@endsection
