var myComponentA = {
    template: `<table class="table-responsive mt-2 calender" border="5" v-cloak>
                <thead>
                    <tr class="text-center">
                        <th  width="15%"></th>
                        <th  width="3%" v-for="date in dayDayOfTheWeeks">{{ date.date }}<br>{{ date.date2 }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="date in dates">
                        <th>{{ date.time }}</th>
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
        if(btn==0){
            this.isPointer = true;
            console.log(this.isPointer);
        }
        var aDatasetDate = document.querySelectorAll('#calender a');
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
                        <th v-for="date in dayDayOfTheWeeks" width="3%">{{ date.date }}<br>{{ date.date2 }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="date in dates">
                        <th>{{ date.time }}</th>
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
        if(btn==0){
            this.isPointer = true;
            console.log(this.isPointer);
        }
        var aDatasetDate = document.querySelectorAll('#calender a');
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
    el: '#app1',
    components: {
        'my-component-a': myComponentA,
        'my-component-b': myComponentB,
    },
    data: {
        componentTypes: ['my-component-a', 'my-component-b'],
        current: false,
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
var myComponentC = {
    template: `
        <div class="booking-btn-flame text-center">
            <div class="booking-btn-container">
                <a class="justify-content-center" v-bind:href="url"><button id="booking-btn-3" class="btn booking-btn mt-3 text-center">予約詳細・変更</button></a>
            </div>
        </div>`,
        data: function(){
            return{
                url: '/seasons/public/confirmation'
            }
        },
}
var myComponentD = {
    template: `
    <template v-if="windowWidth > 960">
        <div class="booking-btn-flame-pc text-center">
            <div class="booking-btn-container">
                <a class="booking-link" v-bind:href="url"><button id="booking-btn-4" class="btn sub-button mt-3 text-center">予約へ進む</button></a>
            </div>
        </div>
    </template>
    <template v-else>
        <div class="booking-btn-flame-sm text-center">
            <div class="booking-btn-container">
                <a class="booking-link" v-bind:href="url2"><button id="booking-btn-5" class="btn booking-btn mt-3 text-center">予約へ進む</button></a>
            </div>
        </div>
    </template>`,
        data: function(){
            return{
                url: '/seasons/public/reservation_plan',
                url2: '/seasons/public/reservation_plan_sm',
                windowWidth: 0,
            }
        },
        mounted() {
            window.addEventListener('resize', this.calculateWindowWidth());
        },
        beforeDestroy() {
            window.removeEventListener('resize', this.calculateWindowWidth());
           },
        methods: {
            calculateWindowWidth() {
             this.windowWidth = window.innerWidth;
             console.log(this.windowWidth);
            }
        }
}
var myComponentE = {
    template: `
        <div class="booking-btn-flame-pc text-center">
            <div class="booking-btn-container">
                <a class="booking-link" v-bind:href="url"><button id="booking-btn-1" class="btn sub-button mt-3 text-center">予約へ進む</button></a>
            </div>
        </div>
        <div class="booking-btn-flame-sm text-center">
            <div class="booking-btn-container">
                <a class="justify-content-center" v-bind:href="url2"><button id="booking-btn-2" class="btn booking-btn mt-3 text-center">予約へ進む</button></a>
            </div>
        </div>`,
        data: function(){
            return{
                url: '/seasons/public/reservation_plan',
                url2: '/seasons/public/reservation_plan_sm'
            }
        },
}

let app2 = new Vue({
    el: '#app2',
    components: {
        'my-component-c': myComponentC,
        'my-component-d': myComponentD,
        'my-component-e': myComponentE,
    },
    data: {
        componentTypes: ['my-component-c', 'my-component-d', 'my-component-e'],
    },
    computed:{
        component: function(){
            return this.componentTypes[btn];
        }
    },
})
