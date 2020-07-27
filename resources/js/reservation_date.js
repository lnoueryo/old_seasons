var myComponentA = {
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
            booking_date_month: '',
            booking_date_day: '',
            booking_date_hour: '',
            booking_date_minute: '',
            length_of_time: '3.5時間',
            bookingPlan: bookingPlan,
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
            '&cut=' + this.bookingPlan.cut +
            '&perm=' + this.bookingPlan.perm +
            '&color=' + this.bookingPlan.color +
            '&treatment=' + this.bookingPlan.treatment +
            '&spa=' + this.bookingPlan.spa +
            '&price=' + this.bookingPlan.price +
            '&length_of_time=' + this.bookingPlan.length_of_time;
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
                        if (this.bookingPlan.length_of_time ==  1 + 0.5 * r + '時間') {
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
                        if (this.bookingPlan.length_of_time ==  1 + 0.5 * l + '時間') {
                            for (let m = 252-14*l; m < 266; m++) {
                                aDatasetDate[m].textContent = '×';
                                aDatasetDate[m].dataset.value = '×';
                                aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                            }
                        }
                    }
                    for (let r = 0; r < 14; r++){
                        if (this.bookingPlan.length_of_time ==  1 + 0.5 * r + '時間') {
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
    },
    data: {
        componentTypes: ['my-component-a'],
        current: false,
    },
    computed:{
        component: function(){
    return this.componentTypes[0]
    }

    }
})
