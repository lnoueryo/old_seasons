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
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/calender.vue.js":
/*!**************************************!*\
  !*** ./resources/js/calender.vue.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var myComponentA = {
  template: "<table class=\"table-responsive mt-2 calender\" border=\"5\" v-cloak>\n                <thead>\n                    <tr class=\"text-center\">\n                        <th  width=\"15%\"></th>\n                        <th  width=\"3%\" v-for=\"date in dayDayOfTheWeeks\">{{ date.date }}<br>{{ date.date2 }}</th>\n                    </tr>\n                </thead>\n                <tbody>\n                    <tr v-for=\"date in dates\">\n                        <th>{{ date.time }}</th>\n                        <td v-for=\"days in date.date\" v-bind:key=\"days\" class=\"text-center\">\n                            <a\n                            type=\"button\"\n                            data-day=\"2\"\n                            data-time=\"30\u5206\"\n                            v-on:click=\"parameter\"\n                            v-bind:href=\"url\"\n                            v-bind:style=\"circle\"\n                            v-bind:data-date=\"days\"\n                            v-bind:data-cut=\"cut\"\n                            v-bind:data-perm=\"perm\"\n                            v-bind:data-color=\"color\"\n                            v-bind:data-treatment=\"treatment\"\n                            v-bind:data-spa=\"spa\"\n                            v-bind:data-price=\"price\"\n                            v-bind:data-length-of-time=\"length_of_time\"\n                            v-bind:class=\"pointer\"\n                            >\u3007</a>\n                        </td>\n                    </tr>\n                </tbody>\n            </table>",
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
        textDecoration: "none"
      }
    };
  },
  computed: {
    url: function url() {
      return '/seasons/public/calender/reservation?booking_date_month=' + this.booking_date_month + '&booking_date_day=' + this.booking_date_day + '&booking_date_hour=' + this.booking_date_hour + '&booking_date_minute=' + this.booking_date_minute + '&cut=' + this.cut + '&perm=' + this.perm + '&color=' + this.color + '&treatment=' + this.treatment + '&spa=' + this.spa + '&price=' + this.price + '&length_of_time=' + this.length_of_time;
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
    if (btn == 0) {
      this.isPointer = true;
      console.log(this.isPointer);
    }

    var aDatasetDate = document.querySelectorAll('#calender a');

    for (var i = 0; i < aDatasetDate.length; i++) {
      for (var j = 0; j < this.dayOfTheWeek.length; j++) {
        var dataDate = aDatasetDate[i].dataset.date;
        var dataDay = aDatasetDate[i].dataset.day;

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
    }

    for (var _i = 0; _i < aDatasetDate.length; _i++) {
      for (var _j2 = 0; _j2 < this.bookings.length; _j2++) {
        if (aDatasetDate[_i].dataset.date == this.bookings[_j2].booking_date_number) {
          aDatasetDate[_i].textContent = '×';
          aDatasetDate[_i].dataset.value = '×';
          aDatasetDate[_i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";

          for (var l = 0; l < 14; l++) {
            if (this.bookings[_j2].length_of_time == 1 + 0.5 * l + '時間') {
              for (var k = 0; k < 14 * l + 15; k += 14) {
                aDatasetDate[_i + k].textContent = '×';
                aDatasetDate[_i + k].dataset.value = '×';
                aDatasetDate[_i + k].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
              }
            }

            if (this.length_of_time == 1 + 0.5 * l + '時間') {
              for (var m = 252 - 14 * l; m < 266; m++) {
                aDatasetDate[m].textContent = '×';
                aDatasetDate[m].dataset.value = '×';
                aDatasetDate[m].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
              }

              if (aDatasetDate[_i].dataset.value == '×') {
                for (var _m = 0; _m < 14 * l + 15; _m += 14) {
                  aDatasetDate[_i - _m].textContent = '×';
                  aDatasetDate[_i - _m].dataset.value = '×';
                  aDatasetDate[_i - _m].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
                }
              }
            }
          }
        }
      }
    }
  }
};
var myComponentB = {
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
        textDecoration: "none"
      }
    };
  },
  computed: {
    url: function url() {
      return '/seasons/public/calender/reservation?booking_date_month=' + this.booking_date_month + '&booking_date_day=' + this.booking_date_day + '&booking_date_hour=' + this.booking_date_hour + '&booking_date_minute=' + this.booking_date_minute + '&cut=' + this.cut + '&perm=' + this.perm + '&color=' + this.color + '&treatment=' + this.treatment + '&spa=' + this.spa + '&price=' + this.price + '&length_of_time=' + this.length_of_time;
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
    if (btn == 0) {
      this.isPointer = true;
      console.log(this.isPointer);
    }

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

      for (var _j3 = 0; _j3 < this.dayTime.length; _j3++) {
        var dataDate = aDatasetDate[i].dataset.date;

        if (dataDate == this.dayTime[_j3].day_time) {
          aDatasetDate[i].textContent = '×';
          aDatasetDate[i].dataset.value = '×';
          aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";

          for (var r = 0; r < 14; r++) {
            if (this.length_of_time == 1 + 0.5 * r + '時間') {
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

              for (var _m2 = 252 - 14 * r; _m2 < 266; _m2++) {
                aDatasetDate[_m2].textContent = '×';
                aDatasetDate[_m2].dataset.value = '×';
                aDatasetDate[_m2].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
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

      for (var _j4 = 0; _j4 < this.bookings.length; _j4++) {
        if (aDatasetDate[i].dataset.date == this.bookings[_j4].booking_date_number) {
          aDatasetDate[i].textContent = '×';
          aDatasetDate[i].dataset.value = '×';
          aDatasetDate[i].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";

          for (var l = 0; l < 14; l++) {
            if (this.bookings[_j4].length_of_time == 1 + 0.5 * l + '時間') {
              for (var k = 0; k < 14 * l + 15; k += 14) {
                aDatasetDate[i + k].textContent = '×';
                aDatasetDate[i + k].dataset.value = '×';
                aDatasetDate[i + k].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
              }
            }

            if (this.length_of_time == 1 + 0.5 * l + '時間') {
              for (var _m3 = 252 - 14 * l; _m3 < 266; _m3++) {
                aDatasetDate[_m3].textContent = '×';
                aDatasetDate[_m3].dataset.value = '×';
                aDatasetDate[_m3].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
              }

              if (aDatasetDate[i].dataset.value == '×') {
                for (var _m4 = 0; _m4 < 14 * l + 15; _m4 += 14) {
                  aDatasetDate[i - _m4].textContent = '×';
                  aDatasetDate[i - _m4].dataset.value = '×';
                  aDatasetDate[i - _m4].style = "pointer-events:none; color: rgb(105,105,105); font-weight: 600;";
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
    'my-component-a': myComponentA,
    'my-component-b': myComponentB
  },
  data: {
    componentTypes: ['my-component-a', 'my-component-b'],
    current: false
  },
  computed: {
    component: function component() {
      if (this.current === false) {
        return this.componentTypes[0];
      } else {
        return this.componentTypes[1];
      }
    }
  }
});
var myComponentC = {
  template: "\n        <div class=\"booking-btn-flame text-center\">\n            <div class=\"booking-btn-container\">\n                <a class=\"justify-content-center\" v-bind:href=\"url\"><button id=\"booking-btn-3\" class=\"btn booking-btn mt-3 text-center\">\u4E88\u7D04\u8A73\u7D30\u30FB\u5909\u66F4</button></a>\n            </div>\n        </div>",
  data: function data() {
    return {
      url: '/seasons/public/confirmation'
    };
  }
};
var myComponentD = {
  template: "\n    <template v-if=\"windowWidth > 960\">\n        <div class=\"booking-btn-flame-pc text-center\">\n            <div class=\"booking-btn-container\">\n                <a class=\"booking-link\" v-bind:href=\"url\"><button id=\"booking-btn-4\" class=\"btn sub-button mt-3 text-center\">\u4E88\u7D04\u3078\u9032\u3080</button></a>\n            </div>\n        </div>\n    </template>\n    <template v-else>\n        <div class=\"booking-btn-flame-sm text-center\">\n            <div class=\"booking-btn-container\">\n                <a class=\"booking-link\" v-bind:href=\"url2\"><button id=\"booking-btn-5\" class=\"btn booking-btn mt-3 text-center\">\u4E88\u7D04\u3078\u9032\u3080</button></a>\n            </div>\n        </div>\n    </template>",
  data: function data() {
    return {
      url: '/seasons/public/reservation_plan',
      url2: '/seasons/public/reservation_plan_sm',
      windowWidth: 0
    };
  },
  mounted: function mounted() {
    window.addEventListener('resize', this.calculateWindowWidth());
  },
  beforeDestroy: function beforeDestroy() {
    window.removeEventListener('resize', this.calculateWindowWidth());
  },
  methods: {
    calculateWindowWidth: function calculateWindowWidth() {
      this.windowWidth = window.innerWidth;
      console.log(this.windowWidth);
    }
  }
};
var myComponentE = {
  template: "\n        <div class=\"booking-btn-flame-pc text-center\">\n            <div class=\"booking-btn-container\">\n                <a class=\"booking-link\" v-bind:href=\"url\"><button id=\"booking-btn-1\" class=\"btn sub-button mt-3 text-center\">\u4E88\u7D04\u3078\u9032\u3080</button></a>\n            </div>\n        </div>\n        <div class=\"booking-btn-flame-sm text-center\">\n            <div class=\"booking-btn-container\">\n                <a class=\"justify-content-center\" v-bind:href=\"url2\"><button id=\"booking-btn-2\" class=\"btn booking-btn mt-3 text-center\">\u4E88\u7D04\u3078\u9032\u3080</button></a>\n            </div>\n        </div>",
  data: function data() {
    return {
      url: '/seasons/public/reservation_plan',
      url2: '/seasons/public/reservation_plan_sm'
    };
  }
};
var app2 = new Vue({
  el: '#app2',
  components: {
    'my-component-c': myComponentC,
    'my-component-d': myComponentD,
    'my-component-e': myComponentE
  },
  data: {
    componentTypes: ['my-component-c', 'my-component-d', 'my-component-e']
  },
  computed: {
    component: function component() {
      return this.componentTypes[btn];
    }
  }
});

/***/ }),

/***/ 7:
/*!********************************************!*\
  !*** multi ./resources/js/calender.vue.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\project\seasons\resources\js\calender.vue.js */"./resources/js/calender.vue.js");


/***/ })

/******/ });