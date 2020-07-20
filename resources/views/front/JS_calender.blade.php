@extends('layouts.front2')

@section('content')
<div id="app">
    <table class="table-responsive mt-2 calender" border="5" v-cloak>
        <tbody>
            <tr v-for="date in dates">
                <th>@{{ date.time }}</th>
                <td v-for="day in date.date">
                    {{-- <input type="type" :name="day" value="〇" oncick="location.href='{{ action('HomeController@reservation', [ 'booking_date' => \Carbon\Carbon::today()->addDays($i-1)->addHours(10)->addMinutes(30)->format("n月d日 H:i"),
                    'cut' => 'カット', 'perm' => '', 'color' => '', 'treatment' => '', 'spa' => '', 'price' => '2900円', 'length_of_time' => '30分']) }}'"> --}}
                    <a
                    type="button"
                    v-bind:href="url"
                    v-bind:data-date="day"
                    v-bind:data-cut="cut"
                    v-bind:data-perm="perm"
                    v-bind:data-color="color"
                    v-bind:data-treatment="treatment"
                    v-bind:data-spa="spa"
                    v-bind:data-price="price"
                    v-bind:data-length-of-time="length_of_time"
                    v-on:click="parameter">〇</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    <script type="text/javascript">
        console.log(@json($dates));
        var json = @json($json);

        let vm = new Vue({
            el: '#app',
            data: {
                dates: @json($dates),
                bookings: json,
                cut: 'カット',
                perm: '',
                color: '',
                treatment: '',
                spa: '',
                price: '2900円',
                length_of_time: '30分',
                booking_date_month: '',
                booking_date_day: '',
                booking_date_hour: '',
                booking_date_minute: '',

            },
            computed: {
                url: function() {
                    console.log(this.bookings[0].booking_date_number);
                    return '{{ route('bk') }}?booking_date_month='+ this.booking_date_month +
                    '&booking_date_day=' + this.booking_date_day +
                    '&booking_date_hour=' + this.booking_date_hour +
                    '&booking_date_minute=' + this.booking_date_minute +
                    '&cut=' + this.cut +
                    '&perm=' + this.perm +
                    '&color=' + this.color +
                    '&treatment=' + this.treatment +
                    '&spa=' + this.spa +
                    '&price=' + this.price +
                    '&length_of_time=' + this.length_of_time;
                }
            },
            mounted: function(){
                var inputNames = document.getElementsByTagName('input');
                var ace = this.bookings;
                var aDatasetDate = document.getElementsByTagName('a');
                for (let j=0;j<ace.length;j++){
                    for (let i=0;i<aDatasetDate.length;i++){
                        if(aDatasetDate[i].dataset.date == ace[j].booking_date_number){
                            for (let l=0;l<14;l++){
                                if(ace[j].length_of_time == 1 + 0.5*l + '時間') {
                                    for (var k = 0; k < 14 * l + 15; k += 14) {
                                        aDatasetDate[i + k].textContent = '×';
                                        aDatasetDate[i + k].style="pointer-events:none;";
                                      }
                                } else {
                                    aDatasetDate[i].textContent = '×';
                                    aDatasetDate[i].style="pointer-events:none;";
                                }
                            }

                        };
                    }
                }
            },
            methods: {
                parameter: function(ele) {
                        var eve = ele.target.dataset.date;
                        this.booking_date_month = eve.charAt(0);
                        this.booking_date_day = eve.charAt(1) + eve.charAt(2);
                        this.booking_date_hour = eve.charAt(3) + eve.charAt(4);
                        this.booking_date_minute = eve.charAt(5) + eve.charAt(6);
                }
            },
        })

        {{--  var result = document.getElementById("abc7191000");
        console.log(result);  --}}

        console.log(inputNames);






    </script>


        <style>
            input {
                border: none;
            }


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
