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
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/reservation_date.js":
/*!******************************************!*\
  !*** ./resources/js/reservation_date.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var myComponentA = {
  template: "<table class=\"table-responsive mt-2 calender\" border=\"5\" v-cloak>\n                <thead>\n                    <tr class=\"text-center\">\n                        <th width=\"15%\"></th>\n                        <th v-for=\"date in dayDayOfTheWeeks\" width=\"3%\">{{ date.date }}<br>{{ date.date2 }}</th>\n                    </tr>\n                </thead>\n                <tbody>\n                    <tr v-for=\"date in dates\">\n                        <th>{{ date.time }}</th>\n                        <td v-for=\"days in date.date\" v-bind:key=\"days\" class=\"text-center\">\n                            <a\n                            type=\"button\"\n                            data-day=\"2\"\n                            data-value=\"\u3007\"\n                            v-on:click=\"parameter\"\n                            v-bind:href=\"url\"\n                            v-bind:style=\"circle\"\n                            v-bind:data-date=\"days\"\n                            v-bind:data-cut=\"cut\"\n                            v-bind:data-perm=\"perm\"\n                            v-bind:data-color=\"color\"\n                            v-bind:data-treatment=\"treatment\"\n                            v-bind:data-spa=\"spa\"\n                            v-bind:data-price=\"price\"\n                            v-bind:data-length-of-time=\"length_of_time\"\n                            v-bind:class=\"pointer\">\u3007</a>\n                        </td>\n                    </tr>\n                </tbody>\n            </table>",
  data: function data() {
    return {
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
        textDecoration: "none"
      }
    };
  },
  computed: {
    url: function url() {
      return '/seasons/public/calender/reservation?booking_date_month=' + this.booking_date_month + '&booking_date_day=' + this.booking_date_day + '&booking_date_hour=' + this.booking_date_hour + '&booking_date_minute=' + this.booking_date_minute + '&cut=' + this.bookingPlan.cut + '&perm=' + this.bookingPlan.perm + '&color=' + this.bookingPlan.color + '&treatment=' + this.bookingPlan.treatment + '&spa=' + this.bookingPlan.spa + '&price=' + this.bookingPlan.price + '&length_of_time=' + this.bookingPlan.length_of_time;
    },
    pointer: function pointer() {
      return {
        pointerEvents: this.isPointer === true
      };
    }
  },
  methods: {
    parameter: function parameter(ele) {
      var eve = ele.target.dataset.date;
      this.booking_date_month = eve.charAt(0);
      this.booking_date_day = eve.charAt(1) + eve.charAt(2);
      this.booking_date_hour = eve.charAt(3) + eve.charAt(4);
      this.booking_date_minute = eve.charAt(5) + eve.charAt(6);
    }
  },
  mounted: function mounted() {
    var aDatasetDate = document.querySelectorAll('#calender a');

    for (var i = 0; i < aDatasetDate.length; i++) {
      for (var j = 0; j < this.dayOfTheWeek.length; j++) {
        var dataDate = aDatasetDate[i].dataset.date;

        if (Math.floor(dataDate / 10000) == this.dayOfTheWeek[j].day_of_the_week) {
          aDatasetDate[i].textContent = '×';
          aDatasetDate[i].dataset.value = '×';
          aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
        }
      }

      for (var _j = 0; _j < this.dayTime.length; _j++) {
        var dataDate = aDatasetDate[i].dataset.date;

        if (dataDate == this.dayTime[_j].day_time) {
          aDatasetDate[i].textContent = '×';
          aDatasetDate[i].dataset.value = '×';
          aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";

          for (var r = 0; r < 14; r++) {
            if (this.bookingPlan.length_of_time == 1 + 0.5 * r + '時間') {
              for (var m = 0; m < 14 * r + 15; m += 14) {
                if (aDatasetDate[i - m] == null) {
                  aDatasetDate[i].textContent = '×';
                  aDatasetDate[i].dataset.value = '×';
                  aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                } else {
                  aDatasetDate[i - m].textContent = '×';
                  aDatasetDate[i - m].dataset.value = '×';
                  aDatasetDate[i - m].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                }
              }

              for (var _m = 252 - 14 * r; _m < 266; _m++) {
                aDatasetDate[_m].textContent = '×';
                aDatasetDate[_m].dataset.value = '×';
                aDatasetDate[_m].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
              }
            }
          }
        }
      }

      if (this.days.includes(this.day[i])) {
        aDatasetDate[i].textContent = '×';
        aDatasetDate[i].dataset.value = '×';
        aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
      }

      if (dataDate < hourFromNow) {
        aDatasetDate[i].textContent = '×';
        aDatasetDate[i].dataset.value = '×';
        aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
      }

      for (var _j2 = 0; _j2 < this.bookings.length; _j2++) {
        if (aDatasetDate[i].dataset.date == this.bookings[_j2].booking_date_number) {
          aDatasetDate[i].textContent = '×';
          aDatasetDate[i].dataset.value = '×';
          aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";

          for (var l = 0; l < 14; l++) {
            if (this.bookings[_j2].length_of_time == 1 + 0.5 * l + '時間') {
              for (var k = 0; k < 14 * l + 15; k += 14) {
                aDatasetDate[i + k].textContent = '×';
                aDatasetDate[i + k].dataset.value = '×';
                aDatasetDate[i + k].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
              }
            }

            if (this.bookingPlan.length_of_time == 1 + 0.5 * l + '時間') {
              for (var _m2 = 252 - 14 * l; _m2 < 266; _m2++) {
                aDatasetDate[_m2].textContent = '×';
                aDatasetDate[_m2].dataset.value = '×';
                aDatasetDate[_m2].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
              }
            }
          }

          for (var _r = 0; _r < 14; _r++) {
            if (this.bookingPlan.length_of_time == 1 + 0.5 * _r + '時間') {
              for (var _m3 = 0; _m3 < 14 * _r + 15; _m3 += 14) {
                if (aDatasetDate[i - _m3] == null) {
                  aDatasetDate[i].textContent = '×';
                  aDatasetDate[i].dataset.value = '×';
                  aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                } else {
                  aDatasetDate[i - _m3].textContent = '×';
                  aDatasetDate[i - _m3].dataset.value = '×';
                  aDatasetDate[i - _m3].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                }
              }
            }
          }
        }
      }
    }
  }
};
new Vue({
  el: '#app1',
  components: {
    'my-component-a': myComponentA
  },
  data: {
    componentTypes: ['my-component-a'],
    current: false
  },
  computed: {
    component: function component() {
      return this.componentTypes[0];
    }
  }
});

/***/ }),

/***/ 8:
/*!************************************************!*\
  !*** multi ./resources/js/reservation_date.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\project\seasons\resources\js\reservation_date.js */"./resources/js/reservation_date.js");


/***/ })

/******/ });