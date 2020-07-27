// var myComponentA = {
//     template: `<table class="table-responsive mt-2 calender" border="5" v-cloak>
//                 <tbody>
//                     <thead>
//                         <tr class="text-center">
//                             <th width="15%"></th>
//                             <th v-for="date in dayDayOfTheWeeks" width="3%">@{{ date.date }}<br>@{{ date.date2 }}</th>
//                         </tr>
//                     </thead>
//                     <tr v-for="date in dates">
//                         <th>@{{ date.time }}</th>
//                         <td v-for="days in date.date" v-bind:key="days" class="text-center">
//                             <a
//                             type="button"
//                             data-day="2"
//                             data-time="30分"
//                             v-bind:href="url"
//                             v-bind:style="circle"
//                             v-bind:data-date="days"
//                             v-bind:data-cut="cut"
//                             v-bind:data-perm="perm"
//                             v-bind:data-color="color"
//                             v-bind:data-treatment="treatment"
//                             v-bind:data-spa="spa"
//                             v-bind:data-price="price"
//                             v-bind:data-length-of-time="length_of_time"
//                             v-on:click="parameter">〇</a>
//                         </td>
//                     </tr>
//                 </tbody>
//             </table>`,
//     data: function(){
//         return{
//             dates: dates,
//         dayDayOfTheWeeks: dayDayOfTheWeeks,
//         dayOfTheWeek: dayOfTheWeek,
//         dayTime: dayTime,
//         days: days,
//         day: day,
//         hourFromNow: hourFromNow,
//         bookings: currentBooking,
//         cut: 'カット',
//         perm: '',
//         color: '',
//         treatment: '',
//         spa: '',
//         price: '2900円',
//         length_of_time: '30分',
//         booking_date_month: '',
//         booking_date_day: '',
//         booking_date_hour: '',
//         booking_date_minute: '',
//         circle: {
//             color: "rgb(53, 83, 146)",
//             fontWeight: "600",
//             textDecoration: "none",
//         }
//         }
//     },
//     computed:{
//          url: function() {
//             return '/seasons/public/calender/reservation?booking_date_month='+ this.booking_date_month +
//             '&booking_date_day=' + this.booking_date_day +
//             '&booking_date_hour=' + this.booking_date_hour +
//             '&booking_date_minute=' + this.booking_date_minute +
//             '&cut=' + this.cut +
//             '&perm=' + this.perm +
//             '&color=' + this.color +
//             '&treatment=' + this.treatment +
//             '&spa=' + this.spa +
//             '&price=' + this.price +
//             '&length_of_time=' + this.length_of_time;
//         }
//     },
//     mounted: function(){
//         var aDatasetDate = document.querySelectorAll('#app1 a');
//         for (let j=0;j<this.bookings.length;j++){
//             for (let i=0;i<aDatasetDate.length;i++){
//                 if(aDatasetDate[i].dataset.date == this.bookings[j].booking_date_number){
//                     for (let l=0; l<14; l++){
//                         aDatasetDate[i].textContent = '×';
//                         aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                     }

//                 }
//             }
//         }
//         for (let j=0;j<this.dayOfTheWeek.length;j++){
//             for (let i=0;i<aDatasetDate.length;i++){
//                 var dataDate = aDatasetDate[i].dataset.date;
//                 if (Math.floor(dataDate / 10000) == this.dayOfTheWeek[j].day_of_the_week) {
//                 aDatasetDate[i].textContent = '×';
//                 aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//         }
//         for (let j=0;j<this.dayTime.length;j++){
//             for (let i=0;i<aDatasetDate.length;i++){
//                 var dataDate = aDatasetDate[i].dataset.date;
//                 if (dataDate == this.dayTime[j].day_time) {
//                 aDatasetDate[i].textContent = '×';
//                 aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//         }
//         for (let i=0;i<aDatasetDate.length;i++){
//             var dataDay = aDatasetDate[i].dataset.day;
//             dataDay = this.day[i];
//             if (this.days.includes(dataDay)) {
//             aDatasetDate[i].textContent = '×';
//             aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";

//             }
//         }
//         for (var i = 0; i < aDatasetDate.length; i++) {
//             var dataDate = aDatasetDate[i].dataset.date;
//             if (dataDate < hourFromNow) {
//                 aDatasetDate[i].textContent = '×';

//                 aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//             }
//         }
//         for (var j = 0; j< this.bookings.length; j++){
//             for (let i=0;i<aDatasetDate.length;i++){
//                 if(aDatasetDate[i].dataset.date == this.bookings[j].booking_date_number){
//                     for (let l=0; l<14; l++){
//                         if(this.bookings[j].length_of_time == 1 + 0.5*l + '時間') {
//                             for (var k = 0; k < 16 * l + 15; k += 14) {
//                                 aDatasetDate[i + k].textContent = '×';
//                                 aDatasetDate[i + k].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                                 }
//                         }
//                         for (let l=0; l<14; l++){
//                             if (this.length_of_time ==  1 + 0.5 * l + '時間') {
//                                 for (let m = 252-14*l; m < 266; m++) {
//                                     aDatasetDate[m].textContent = '×';
//                                     aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                                 }
//                             }
//                         }
//                     }

//                 }
//             }
//         }
//     },
// }
// var myComponentB = {
//     template: `<table class="table-responsive mt-2 calender" border="5" v-cloak>
//                 <tbody>
//                     <thead>
//                         <tr class="text-center">
//                             <th width="15%"></th>
//                             <th v-for="date in dayDayOfTheWeeks" width="3%">@{{ date.date }}<br>@{{ date.date2 }}</th>
//                         </tr>
//                     </thead>
//                     <tr v-for="date in dates">
//                         <th>@{{ date.time }}</th>
//                         <td v-for="days in date.date" v-bind:key="days" class="text-center">
//                             <a
//                             type="button"
//                             data-day="2"
//                             data-value="〇"
//                             v-bind:href="url"
//                             v-bind:style="circle"
//                             v-bind:data-date="days"
//                             v-bind:data-cut="cut"
//                             v-bind:data-perm="perm"
//                             v-bind:data-color="color"
//                             v-bind:data-treatment="treatment"
//                             v-bind:data-spa="spa"
//                             v-bind:data-price="price"
//                             v-bind:data-length-of-time="length_of_time"
//                             v-on:click="parameter">〇</a>
//                         </td>
//                     </tr>
//                 </tbody>
//             </table>`,
//     data: function(){
//         return{
//             dates: dates,
//             dayDayOfTheWeeks: dayDayOfTheWeeks,
//             dayOfTheWeek: dayOfTheWeek,
//             dayTime: dayTime,
//             days: days,
//             day: day,
//             hourFromNow: hourFromNow,
//             bookings: currentBooking,
//             cut: 'カット',
//             perm: '',
//             color: '',
//             treatment: '',
//             spa: '',
//             price: '3100円',
//             length_of_time: '2時間',
//             booking_date_month: '',
//             booking_date_day: '',
//             booking_date_hour: '',
//             booking_date_minute: '',
//             circle: {
//                 color: "#d84b6a",
//                 fontWeight: "600",
//                 textDecoration: "none",
//             }
//         }
//     },
//     computed:{
//          url: function() {
//             return '/seasons/public/calender/reservation?booking_date_month='+ this.booking_date_month +
//             '&booking_date_day=' + this.booking_date_day +
//             '&booking_date_hour=' + this.booking_date_hour +
//             '&booking_date_minute=' + this.booking_date_minute +
//             '&cut=' + this.cut +
//             '&perm=' + this.perm +
//             '&color=' + this.color +
//             '&treatment=' + this.treatment +
//             '&spa=' + this.spa +
//             '&price=' + this.price +
//             '&length_of_time=' + this.length_of_time;
//         }
//     },
//     mounted: function(){
//         var aDatasetDate = document.querySelectorAll('#app1 a');
//         for (let j=0;j<this.dayOfTheWeek.length;j++){
//             for (let i=0;i<aDatasetDate.length;i++){
//                 var dataDate = aDatasetDate[i].dataset.date;
//                 if (Math.floor(dataDate / 10000) == this.dayOfTheWeek[j].day_of_the_week) {
//                 aDatasetDate[i].textContent = '×';
//                 aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//                 if (dataDate == this.dayTime[j].day_time) {
//                     aDatasetDate[i].textContent = '×';
//                     aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//         }
//         {{--  for (let j=0;j<this.dayTime.length;j++){
//             for (let i=0;i<aDatasetDate.length;i++){
//                 var dataDate = aDatasetDate[i].dataset.date;
//                 if (dataDate == this.dayTime[j].day_time) {
//                 aDatasetDate[i].textContent = '×';
//                 aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//         }  --}}
//         for (let i=0;i<aDatasetDate.length;i++){
//             var dataDay = aDatasetDate[i].dataset.day;
//             dataDay = this.day[i];
//             if (this.days.includes(dataDay)) {
//             aDatasetDate[i].textContent = '×';
//             aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";

//             }
//         }
//         for (var i = 0; i < aDatasetDate.length; i++) {
//             var dataDate = aDatasetDate[i].dataset.date;
//             if (dataDate < hourFromNow) {
//                 aDatasetDate[i].textContent = '×';
//                 aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//             }
//         }
//         for (let j=0;j<this.bookings.length;j++){
//             for (let i=0;i<aDatasetDate.length;i++){
//                 if(aDatasetDate[i].dataset.date == this.bookings[j].booking_date_number){
//                     for (let l=0; l<14; l++){
//                         aDatasetDate[i].textContent = '×';
//                         aDatasetDate[i].dataset.value = '×';
//                         aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                     }

//                 }
//             }
//         }
//         for (var j = 0; j< this.bookings.length; j++){
//             for (let i=0;i<aDatasetDate.length;i++){
//                 if(aDatasetDate[i].dataset.date == this.bookings[j].booking_date_number){
//                     for (let l=0; l<14; l++){
//                         if(this.bookings[j].length_of_time == 1 + 0.5*l + '時間') {
//                             for (var k = 0; k < (14 * l) + 15; k += 14) {
//                                 aDatasetDate[i + k].textContent = '×';
//                                 aDatasetDate[i + k].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                             }
//                         }
//                     }
//                 }
//                 for (let l=0; l<14; l++){
//                     if (this.length_of_time ==  1 + 0.5 * l + '時間') {
//                         for (let m = 252-14*l; m < 266; m++) {
//                             aDatasetDate[m].textContent = '×';
//                             aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                         }
//                     }
//                 }
//                 for (let l=0; l<14; l++){
//                     if (this.length_of_time ==  1 + 0.5 * l + '時間') {
//                         for (let m = 252-14*l; m < 266; m++) {
//                             aDatasetDate[m].textContent = '×';
//                             aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                         }
//                     }
//                 }
//                 for (let l=0; l<14; l++){
//                     if (this.length_of_time ==  1 + 0.5 * l + '時間') {
//                         if(aDatasetDate[i].dataset.value == '×') {
//                             for (let m = 0; m < 14 * l + 15; m += 14) {
//                             aDatasetDate[i - m].textContent = '×';
//                             aDatasetDate[i - m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                             }
//                         }
//                     }
//                 }
//             }
//         }
//     }
// }
// {{--  if(aDatasetDate[i].textContent == '×') {
//     for (var m = 0; m < 14 * l + 15; m += 14) {
//     aDatasetDate[i - m].textContent = '×';
//     aDatasetDate[i - m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//     }
// }  --}}
// new Vue({
//     el: '#app1',
//     components: {
//         'my-component-a': myComponentA,
//         'my-component-b': myComponentB,
//     },
//     data: {
//         componentTypes: ['my-component-a', 'my-component-b'],
//         current: 0,
//     },
//     computed:{
//         component: function(){
// 　　　 // 一致しているコンポーネント名を返す
//             return this.componentTypes[this.current]
//         }
//     },
//     mounted: function(){

//     },
//     methods: {
//         parameter: function(ele) {
//             var eve = ele.target.dataset.date;
//             this.booking_date_month = eve.charAt(0);
//             this.booking_date_day = eve.charAt(1) + eve.charAt(2);
//             this.booking_date_hour = eve.charAt(3) + eve.charAt(4);
//             this.booking_date_minute = eve.charAt(5) + eve.charAt(6);
//         }
//     },
// })
// {{--  var aDatasetDate = document.querySelectorAll('#app2 a');
// for (var j = 0; j< myComponentA.$data.bookings.length; j++){
//     for (let i=0;i<aDatasetDate.length;i++){
//         if(aDatasetDate[i].dataset.date == myComponentA.$data.bookings[j].booking_date_number){
//             for (let l=0; l<14; l++){
//                 if(myComponentA.$data.bookings[j].length_of_time == 1 + 0.5*l + '時間') {
//                     for (var k = 0; k < 16 * l + 15; k += 14) {
//                         aDatasetDate[i + k].textContent = '×';
//                         aDatasetDate[i + k].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                         }
//                 }
//                 for (let l=0; l<14; l++){
//                     if (myComponentA.$data.length_of_time ==  1 + 0.5 * l + '時間') {
//                         for (let m = 252-14*l; m < 266; m++) {
//                             aDatasetDate[m].textContent = '×';
//                             aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                         }
//                     }
//                 }
//             }

//         }
//     }
// }  --}}

// function openYahoo(){
//     {{--  this.bookings.forEach(function(item, index) {
//         var bookingDate = item.booking_date_number;
//         var time = item.length_of_time;
//         var aDatasetDate = document.querySelectorAll('#app1 a');
//         for (var i = 0; i < aDatasetDate.length - 1; i++) {
//             if (aDatasetDate[i].dataset.date == bookingDate) {
//                 aDatasetDate[i].dataset.time = time;
//             for (var l = 0; l < 16; l += 1) {
//                 if (aDatasetDate[i].dataset.time === 1 + 0.5 * l + '時間') {
//                     for (var j = 0; j < 14 * l + 15; j += 14) {
//                         aDatasetDate[i + j].textContent = '×';
//                         aDatasetDate[i + j].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                     }
//                 } else {
//                     aDatasetDate[i].textContent = '×';
//                     aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//             for (var m = 0; m < 16; m += 1) {
//                 if (this.length_of_time === 1 + 0.5 * m + '時間') {
//                     if(aDatasetDate[i].textContent = '×') {
//                         for (var j = 0; j < 14 * m + 15; j += 14) {
//                         aDatasetDate[i - j].textContent = '×';
//                         aDatasetDate[i - j].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//                     }
//                 } else {
//                     aDatasetDate[i].textContent = '×';
//                     aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//             }
//         }
//         for (let l=0; l<14; l++){
//             if (myComponentA.$data.length_of_time ==  1 + 0.5 * l + '時間') {
//                 for (let m = 252-14*l; m < 266; m++) {
//                     aDatasetDate[m].textContent = '×';
//                     aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//         }
//       })  --}}
// };

// setTimeout("openYahoo()", 0.1);
