@extends('layouts.front')
@section('content')
<div id="JScalender">
    <ul class="address text-center mt-4 mb-5">
        <li>福岡市中央区六本松</li>
        <li><p>4-9-7ジャパンパル101</p></li>
        <li class="tel">TEL.092-775-1821</li>
    </ul>
    @{{ dates }}
    <ul class="introduction text-center mt-4 mb-5">
        <li class="mt-2">美容室SeaSons(シーズン)はお客様の四季折々のヘアースタイルを常に提供させて頂けたらいいな、と言う思いでオープンしました。</li>
        <li>誰でも来やすいアットホームな店つくりを心がけておりますので気軽に立ち寄っていただけたら幸いです。</li>
        <li><span class="name">代表　道下 雅巳</span></li>
    </ul>
    <div class="col-md-10 offset-md-1">
        <div class="quick-booking-able-text">予約表</div>
        <ul id="tabMenu" class="fix-line">
            <li>
                <a class="man" href="#tabBox1" v-on:click="current = false">男性カットのみ</a>
            </li>
            <li>
                <div class="toggle-switch text-center">
                    <input id="toggle" class="toggle-input" type='checkbox' v-model="current">
                    <label for="toggle" class="toggle-label">
                </div>
            </li>
            <li>
                <a class="woman" href="#tabBox2" v-on:click="current = true">女性カットのみ</a>
            </li>
        </ul>
    </div>
    <div id="JS-calender">
        <keep-alive>
            <div v-bind:is="component"></div>
        </keep-alive>
    </div>
    <ul id="tabMenu" class="fix-line">
        <li>
            <a class="man" href="#tabBox1" v-on:click="current = false">男性カットのみ</a>
        </li>
        <li>
            <div class="toggle-switch text-center">
                <input id="toggle" class="toggle-input" type='checkbox' v-model="current">
                <label for="toggle" class="toggle-label">
            </div>
        </li>
        <li>
            <a class="woman" href="#tabBox2" v-on:click="current = true">女性カットのみ</a>
        </li>
    </ul>
</div>

    {{--  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>  --}}
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>  --}}
    <script type="text/javascript">
    var dayDayOfTheWeeks = @json($dateArray2);
    var dayOfTheWeek = @json($day_of_the_week);
    var days = @json($days);
    var day = @json($day);
    var hourFromNow = {{ $hour_from_now }};
    var dayTime = @json($day_time);
    var dates = @json($dateArray);
    var currentBooking = @json($current_booking);

    var myComponentA = {
        template: `<table class="table-responsive mt-2 calender" border="5" v-cloak>
                    <thead>
                        <tr class="text-center">
                            <th  width="15%"></th>
                            <th  width="3%" v-for="date in dayDayOfTheWeeks">@{{ date.date }}<br>@{{ date.date2 }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="date in dates">
                            <th>@{{ date.time }}</th>
                            <td v-for="days in date.date" v-bind:key="days" class="text-center">
                                <a
                                type="button"
                                data-day="2"
                                data-time="30分"
                                v-on:click="parameter"
                                v-bind:href="url"
                                v-bind:style="circle"
                                v-bind:data-date="days"
                                v-bind:data-cut="cut"
                                v-bind:data-perm="perm"
                                v-bind:data-color="color"
                                v-bind:data-treatment="treatment"
                                v-bind:data-spa="spa"
                                v-bind:data-price="price"
                                v-bind:data-length-of-time="length_of_time"
                                v-bind:class="pointer"
                                >〇</a>
                            </td>
                        </tr>
                    </tbody>
                </table>`,
        data: function(){
            return{
                dates: dates,
                dayDayOfTheWeeks: dayDayOfTheWeeks,
                dayOfTheWeek: dayOfTheWeek,
                dayTime: dayTime,
                days: days,
                day: day,
                hourFromNow: hourFromNow,
                bookings: currentBooking,
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
                isPointer: false,
                circle: {
                    color: "rgb(53, 83, 146)",
                    fontWeight: "600",
                    textDecoration: "none",
                }
            }
        },
        computed:{
             url: function() {
                return '/seasons/public/calender/reservation?booking_date_month='+ this.booking_date_month +
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
            },
            pointer: function() {
                return {
                    pointerEvents: this.isPointer === true,
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
            },
        },
        mounted: function(){
            var aDatasetDate = document.querySelectorAll('#JS-calender a');
            for (let i=0;i<aDatasetDate.length;i++){
                for (let j=0;j<this.dayOfTheWeek.length;j++){
                    var dataDate = aDatasetDate[i].dataset.date;
                    var dataDay = aDatasetDate[i].dataset.day;
                    if (Math.floor(dataDate / 10000) == this.dayOfTheWeek[j].day_of_the_week) {
                    aDatasetDate[i].textContent = '×';
                    aDatasetDate[i].dataset.value = '×';
                    aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                    }
                }
                for (let j=0;j<this.dayTime.length;j++){
                    var dataDate = aDatasetDate[i].dataset.date;
                    if (dataDate == this.dayTime[j].day_time) {
                        aDatasetDate[i].textContent = '×';
                        aDatasetDate[i].dataset.value = '×';
                        aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                    }
                }
                if (this.days.includes(this.day[i])) {
                    aDatasetDate[i].textContent = '×';
                    aDatasetDate[i].dataset.value = '×';
                    aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                }
                if (dataDate < hourFromNow) {
                    aDatasetDate[i].textContent = '×';
                    aDatasetDate[i].dataset.value = '×';
                    aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                }
            }
            for (let i=0;i<aDatasetDate.length;i++){
                for (let j=0;j<this.bookings.length;j++){
                    if(aDatasetDate[i].dataset.date == this.bookings[j].booking_date_number){
                        aDatasetDate[i].textContent = '×';
                        aDatasetDate[i].dataset.value = '×';
                        aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                        for (let l=0; l<14; l++){
                            if(this.bookings[j].length_of_time == 1 + 0.5*l + '時間') {
                                for (var k = 0; k < (14 * l) + 15; k += 14) {
                                    aDatasetDate[i + k].textContent = '×';
                                    aDatasetDate[i + k].dataset.value = '×';
                                    aDatasetDate[i + k].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                }
                            }
                            if (this.length_of_time ==  1 + 0.5 * l + '時間') {
                                for (let m = 252-14*l; m < 266; m++) {
                                    aDatasetDate[m].textContent = '×';
                                    aDatasetDate[m].dataset.value = '×';
                                    aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                }
                                if(aDatasetDate[i].dataset.value == '×') {
                                    for (let m = 0; m < 14 * l + 15; m += 14) {
                                    aDatasetDate[i - m].textContent = '×';
                                    aDatasetDate[i - m].dataset.value = '×';
                                    aDatasetDate[i - m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    var myComponentB = {
        template: `<table class="table-responsive mt-2 calender" border="5" v-cloak>
                    <thead>
                        <tr class="text-center">
                            <th width="15%"></th>
                            <th v-for="date in dayDayOfTheWeeks" width="3%">@{{ date.date }}<br>@{{ date.date2 }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="date in dates">
                            <th>@{{ date.time }}</th>
                            <td v-for="days in date.date" v-bind:key="days" class="text-center">
                                <a
                                type="button"
                                data-day="2"
                                data-value="〇"
                                v-on:click="parameter"
                                v-bind:href="url"
                                v-bind:style="circle"
                                v-bind:data-date="days"
                                v-bind:data-cut="cut"
                                v-bind:data-perm="perm"
                                v-bind:data-color="color"
                                v-bind:data-treatment="treatment"
                                v-bind:data-spa="spa"
                                v-bind:data-price="price"
                                v-bind:data-length-of-time="length_of_time"
                                v-bind:class="pointer">〇</a>
                            </td>
                        </tr>
                    </tbody>
                </table>`,
        data: function(){
            return{
                dates: dates,
                dayDayOfTheWeeks: dayDayOfTheWeeks,
                dayOfTheWeek: dayOfTheWeek,
                dayTime: dayTime,
                days: days,
                day: day,
                hourFromNow: hourFromNow,
                bookings: currentBooking,
                cut: 'カット',
                perm: '',
                color: '',
                treatment: '',
                spa: '',
                price: '3100円',
                length_of_time: '1時間',
                booking_date_month: '',
                booking_date_day: '',
                booking_date_hour: '',
                booking_date_minute: '',
                isPointer: false,
                circle: {
                    color: "#d84b6a",
                    fontWeight: "600",
                    textDecoration: "none",
                },
            }
        },
        computed:{
             url: function() {
                return '/seasons/public/calender/reservation?booking_date_month='+ this.booking_date_month +
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
            },
            pointer: function() {
                return {
                    pointerEvents: this.isPointer === true,
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
            },
        },
        mounted: function(){
            var aDatasetDate = document.querySelectorAll('#JS-calender a');
            for (let i=0;i<aDatasetDate.length;i++){
                for (let j=0;j<this.dayOfTheWeek.length;j++){
                    var dataDate = aDatasetDate[i].dataset.date;
                    if (Math.floor(dataDate / 10000) == this.dayOfTheWeek[j].day_of_the_week) {
                    aDatasetDate[i].textContent = '×';
                    aDatasetDate[i].dataset.value = '×';
                    aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                    }
                }
                for (let j=0;j<this.dayTime.length;j++){
                    var dataDate = aDatasetDate[i].dataset.date;
                    if (dataDate == this.dayTime[j].day_time) {
                        aDatasetDate[i].textContent = '×';
                        aDatasetDate[i].dataset.value = '×';
                        aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                        for (let r = 0; r < 14; r++){
                            if (this.length_of_time ==  1 + 0.5 * r + '時間') {
                                for (let m = 0; m < 14 * r + 15; m += 14) {
                                    if(aDatasetDate[i - m] == null) {
                                        aDatasetDate[i].textContent = '×';
                                        aDatasetDate[i].dataset.value = '×';
                                        aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                    } else {
                                        aDatasetDate[i - m].textContent = '×';
                                        aDatasetDate[i - m].dataset.value = '×';
                                        aDatasetDate[i - m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                    }
                                }
                                for (let m = 252-14*r; m < 266; m++) {
                                    aDatasetDate[m].textContent = '×';
                                    aDatasetDate[m].dataset.value = '×';
                                    aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                }
                            }
                        }
                    }
                }
                if (this.days.includes(this.day[i])) {
                    aDatasetDate[i].textContent = '×';
                    aDatasetDate[i].dataset.value = '×';
                    aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                }
                if (dataDate < hourFromNow) {
                    aDatasetDate[i].textContent = '×';
                    aDatasetDate[i].dataset.value = '×';
                    aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                }
                for (let j=0;j<this.bookings.length;j++){
                    if(aDatasetDate[i].dataset.date == this.bookings[j].booking_date_number){
                        aDatasetDate[i].textContent = '×';
                        aDatasetDate[i].dataset.value = '×';
                        aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                        for (let l=0; l<14; l++){
                            if(this.bookings[j].length_of_time == 1 + 0.5*l + '時間') {
                                for (var k = 0; k < (14 * l) + 15; k += 14) {
                                    aDatasetDate[i + k].textContent = '×';
                                    aDatasetDate[i + k].dataset.value = '×';
                                    aDatasetDate[i + k].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                }
                            }
                            if (this.length_of_time ==  1 + 0.5 * l + '時間') {
                                for (let m = 252-14*l; m < 266; m++) {
                                    aDatasetDate[m].textContent = '×';
                                    aDatasetDate[m].dataset.value = '×';
                                    aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                }
                                if(aDatasetDate[i].dataset.value == '×') {
                                    for (let m = 0; m < 14 * l + 15; m += 14) {
                                    aDatasetDate[i - m].textContent = '×';
                                    aDatasetDate[i - m].dataset.value = '×';
                                    aDatasetDate[i - m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    new Vue({
        el: '#JScalender',
        components: {
            'my-component-a': myComponentA,
            'my-component-b': myComponentB,
        },
        data: {
            componentTypes: ['my-component-a', 'my-component-b'],
            current: false,
            bookings: '',
        },
        computed:{
            component: function(){
        　　　 if(this.current === false){
                return this.componentTypes[0]
                } else {
                    return this.componentTypes[1]
                }
            }
        },
    })

    </script>
    <script src="{{ asset('js/calender.vue.js') }}" defer></script>

        <style>
            .pointerEvents {
                pointer-events: none;
            }
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
