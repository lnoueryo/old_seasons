/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/vue.js":
/*!*****************************!*\
  !*** ./resources/js/vue.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// new Vue({
//     el: '#app3',
//     data: function() {
//         return {
//         bookings: null,
//         dates: dateArray,
//         current: 'access',
//         tabs: {
//             'access': 'アクセス',
//             'concept': 'コンセプト',
//             'contact': 'お問い合わせ'
//         },
//     }
//     },
//     methods: {
//         onclick: function(tab) {
//             this.current = tab;
//         }
//     },
//     computed: {
//         tabNames: function() {
//             return Object.keys(this.tabs);
//         },
//         currentTab: function() {
//             return 'tab-' + this.current;
//         }
//     },
//     mounted (){
//         axios
//         .get('Ajax/JS_calender')
//         .then(response => (this.bookings = response))
//         .catch(error => (this.error = error))
//     },
//     created: function() {
//         let that = this;
//        setInterval(function() {
//             axios
//         .get('Ajax/JS_calender')
//         .then(response => (that.bookings = response))
//         .catch(error => (that.error = error))
//         },10000);
//     },
// });
// let vm = new Vue({
//     el: '#app-calender',
//     data: {
//         isActive: '1',
//         dates: dates,
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
//     },
//     computed: {
//         url: function() {
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
//         },
//     },
//     mounted: function(){
//     var aDatasetDate = document.querySelectorAll('#app-calender a');
//             for (let j=0;j<this.bookings.length;j++){
//                 for (let i=0;i<aDatasetDate.length;i++){
//                     if(aDatasetDate[i].dataset.date == this.bookings[j].booking_date_number){
//                         for (let l=0; l<14; l++){
//                                 aDatasetDate[i].textContent = '×';
//                                 aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                         }
//                     }
//                 }
//             }
//             for (let j=0;j<this.dayOfTheWeek.length;j++){
//                 for (let i=0;i<aDatasetDate.length;i++){
//                     var dataDate = aDatasetDate[i].dataset.date;
//                     if (Math.floor(dataDate / 10000) == this.dayOfTheWeek[j].day_of_the_week) {
//                     aDatasetDate[i].textContent = '×';
//                     aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                     }
//                 }
//             }
//             for (let j=0;j<this.dayTime.length;j++){
//                 for (let i=0;i<aDatasetDate.length;i++){
//                     var dataDate = aDatasetDate[i].dataset.date;
//                     if (dataDate == this.dayTime[j].day_time) {
//                     aDatasetDate[i].textContent = '×';
//                     aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                     }
//                 }
//             }
//             for (let i=0;i<aDatasetDate.length;i++){
//                 var dataDay = aDatasetDate[i].dataset.day;
//                 dataDay = this.day[i];
//                 if (this.days.includes(dataDay)) {
//                 aDatasetDate[i].textContent = '×';
//                 aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//             for (var i = 0; i < aDatasetDate.length; i++) {
//                 var dataDate = aDatasetDate[i].dataset.date;
//                 if (dataDate < hourFromNow) {
//                     aDatasetDate[i].textContent = '×';
//                     aDatasetDate[i].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                 }
//             }
//         },
//     methods: {
//         parameter: function(ele) {
//                 var eve = ele.target.dataset.date;
//                 this.booking_date_month = eve.charAt(0);
//                 this.booking_date_day = eve.charAt(1) + eve.charAt(2);
//                 this.booking_date_hour = eve.charAt(3) + eve.charAt(4);
//                 this.booking_date_minute = eve.charAt(5) + eve.charAt(6);
//         },
//     },
// })
// var aDatasetDate = document.querySelectorAll('#app-calender a');
// for (var j = 0; j< vm.$data.bookings.length; j++){
//     for (let i=0;i<aDatasetDate.length;i++){
//         if(aDatasetDate[i].dataset.date == vm.$data.bookings[j].booking_date_number){
//             for (let l=0; l<14; l++){
//                 if(vm.$data.bookings[j].length_of_time == 1 + 0.5*l + '時間') {
//                     for (var k = 0; k < 16 * l + 15; k += 14) {
//                         aDatasetDate[i + k].textContent = '×';
//                         aDatasetDate[i + k].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                         }
//                 }
//                 for (let l=0; l<14; l++){
//                     if (vm.$data.length_of_time ==  1 + 0.5 * l + '時間') {
//                         for (let m = 252-14*l; m < 266; m++) {
//                             aDatasetDate[m].textContent = '×';
//                             aDatasetDate[m].style="pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
//                         }
//                     }
//                 }
//             }
//         }
//     }
// }

/***/ }),

/***/ 6:
/*!***********************************!*\
  !*** multi ./resources/js/vue.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\project\seasons\resources\js\vue.js */"./resources/js/vue.js");


/***/ })

/******/ });