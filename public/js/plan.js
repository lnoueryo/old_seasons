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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/plan.js":
/*!******************************!*\
  !*** ./resources/js/plan.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

//   function total() {
//     yen = 0;
//     time = 0;
//     const array = [30,60,90,150,180,60,90,150,30,60,90,30]
//     for (i=0; i< 12; i++) {
//             if (document.A_Form.elements[i].checked) {
//                 if(document.A_Form.elements[0].checked) {
//                     document.A_Form.elements[2].value =3900
//                     document.A_Form.elements[3].value =6100
//                     document.A_Form.elements[4].value =11600
//                     yen += eval(document.A_Form.elements[i].value);
//                     time += array[i];
//                 } else if(document.A_Form.elements[1].checked) {
//                     document.A_Form.elements[2].value =4000
//                     document.A_Form.elements[3].value =6200
//                     document.A_Form.elements[4].value =11700
//                     yen += eval(document.A_Form.elements[i].value);
//                     time += array[i];
//                 } else if(document.A_Form.elements[0].checked == false && document.A_Form.elements[1].checked == false) {
//                     document.A_Form.elements[2].value =5500
//                     document.A_Form.elements[3].value =7700
//                     document.A_Form.elements[4].value =13200
//                     yen += eval(document.A_Form.elements[i].value);
//                     time += array[i];
//                 } else {
//             yen += eval(document.A_Form.elements[i].value);
//             time += array[i];
//             }
//         }
//     }
//     document.A_Form.price.value = yen + '円';
//     if (time === 30 || time === 0) {
//     document.A_Form.length_of_time.value = time + '分';
//     } else if(time === 0) {
//     document.A_Form.length_of_time.value = time;
//     } else {
//     document.A_Form.length_of_time.value = time/60 + '時間';
//     }
//     }
//     document.getElementById('A_Form').onsubmit = function() {
//         const search = document.getElementById('A_Form').price.value;
//         document.getElementById('A_Form').prices.value = `${search} +1000`
//     };
$(document).ready(function () {
  $("input").click(function () {
    $('#output').text($('#price').val());
  });
  $("input").click(function () {
    $('#output2').text($('#length_of_time').val());
  });
}); // var number6 = 0;
//     $('input[type=checkbox]').click(function() {
//         var checked_length = $('input[type=checkbox]:checked').length;
//         number6 +=1;
//         if (checked_length == 1 && number6 > 1) {
//             $('.next').prop('disabled', true);x
//             number6 = 0;
//         } else {
//             $('.next').prop('disabled', false);
//         }
//       });
// $('input[type=reset]').click(function() {
//     $('input').prop('disabled', false);
// })
// var number = 0;
// $('#menscut').click(function() {
//     number +=1;
//     if (number === 1) {
//       document.getElementById('perm1').textContent = '3,900';
//       document.getElementById('perm2').textContent = '6,100';
//       document.getElementById('perm3').textContent = '11,600';
//       document.getElementById('color1').textContent = '2,800';
//       document.getElementById('color2').textContent = '3,900';
//       document.getElementById('color3').textContent = '10,600';
//       $('#cut').val('カット');
//     } else {
//         document.getElementById('perm1').textContent = '5,500';
//         document.getElementById('perm2').textContent = '7,700';
//         document.getElementById('perm3').textContent = '13,200';
//         document.getElementById('color1').textContent = '4,400';
//         document.getElementById('color2').textContent = '5,500';
//         document.getElementById('color3').textContent = '12,200';
//         number = 0;
//         $('#cut').val();
//     }
//   });
// var number = 0;
// $('#ladiescut').click(function() {
//     number +=1;
//     if (number === 1) {
//       document.getElementById('perm1').textContent = '4,000';
//       document.getElementById('perm2').textContent = '6,200';
//       document.getElementById('perm3').textContent = '11,700';
//       document.getElementById('color1').textContent = '2,900';
//       document.getElementById('color2').textContent = '4,000';
//       document.getElementById('color3').textContent = '10,700';
//       $('#cut').val('カット');
//     } else {
//         document.getElementById('perm1').textContent = '5,500';
//         document.getElementById('perm2').textContent = '7,700';
//         document.getElementById('perm3').textContent = '13,200';
//         document.getElementById('color1').textContent = '4,400';
//         document.getElementById('color2').textContent = '5,500';
//         document.getElementById('color3').textContent = '12,200';
//         $('#cut').val('');
//         number = 0;
//     }
//   });
// var number2 = 0;
// $('#coldperm').click(function() {
//     number2 +=1;
//     if (number2 === 1) {
//         $('#perm').val('コールドパーマ');
//     } else {
//         $('#perm').val('');
//         number2 = 0;
//     }
//   });
// var number2 = 0;
// $('#creepperm').click(function() {
//     number2 +=1;
//     if (number2 === 1) {
//         $('#perm').val('クリープパーマ');
//     } else {
//         $('#perm').val('');
//     }
//   });
// var number2 = 0;
// $('#digitalperm').click(function() {
//     number2 +=1;
//     if (number2 === 1) {
//         $('#perm').val('デジタルパーマ');
//     } else {
//         $('#perm').val('');
//         number2 = 0;
//     }
//   });
// var number3 = 0;
// $('#graycolor').click(function() {
//     number3 +=1;
//     if (number3 === 1) {
//         $('#color').val('グレーカラー');
//     } else {
//         $('#color').val('');
//         number3 = 0;
//     }
//   });
// var number3 = 0;
// $('#fashioncolor').click(function() {
//     number3 +=1;
//     if (number3 === 1) {
//         $('#color').val('ファッションカラー');
//     } else {
//         $('#color').val('');
//         number3 = 0;
//     }
//   });
// var number3 = 0;
// $('#designcolor').click(function() {
//     number3 +=1;
//     if (number3 === 1) {
//         $('#color').val('3D・デザインカラー');
//     } else {
//         $('#color').val('');
//         number3 = 0;
//     }
//   });
// var number4 = 0;
// $('#treatments').click(function() {
//     number4 +=1;
//     if (number4 === 1) {
//         $('#treatment').val('トリートメント');
//     } else {
//         $('#treatment').val('');
//         number4 = 0;
//     }
//   });
// var number5 = 0;
// $('#spa30min').click(function() {
//     number5 +=1;
//     if (number5 === 1) {
//         $('#spa').val('スパ30分コース');
//     } else {
//         $('#spa').val('');
//         number5 = 0;
//     }
//   });
// var number5 = 0;
// $('#spa60min').click(function() {
//     number5 +=1;
//     if (number5 === 1) {
//         $('#spa').val('スパ60分コース');
//     } else {
//         $('#spa').val('');
//         number5 = 0;
//     }
//   });
// var number5 = 0;
// $('#spa90min').click(function() {
//     number5 +=1;
//     if (number5 === 1) {
//         $('#spa').val('スパ90分コース');
//         document.getElementById('treat').textContent = 'free';
//     } else {
//         $('#spa').val('');
//         document.getElementById('treat').textContent = '2,200';
//         number5 = 0;
//     }
//   });
// $('input[name=cuts]').click(function() {
//   var checked_length = $('input[name=cuts]:checked').length;
//   if (checked_length >= 1) {
//     $('input[name=cuts]:not(:checked)').prop('disabled', true);
//   } else {
//     $('input[name=cuts]:not(:checked)').prop('disabled', false);
//   }
// });
// $('input[name=perms]').click(function() {
//     var checked_length = $('input[name=perms]:checked').length;
//     if (checked_length >= 1) {
//       $('input[name=perms]:not(:checked)').prop('disabled', true);
//     } else {
//       $('input[name=perms]:not(:checked)').prop('disabled', false);
//     }
//   });
// $('input[name=colors]').click(function() {
//   var checked_length = $('input[name=colors]:checked').length;
//   if (checked_length >= 1) {
//     $('input[name=colors]:not(:checked)').prop('disabled', true);
//   } else {
//     $('input[name=colors]:not(:checked)').prop('disabled', false);
//   }
// });
// $('input[name=spas]').click(function() {
//     var checked_length = $('input[name=spas]:checked').length;
//     if (checked_length >= 1) {
//       $('input[name=spas]:not(:checked)').prop('disabled', true);
//     } else {
//       $('input[name=spas]:not(:checked)').prop('disabled', false);
//     }
//   });

/***/ }),

/***/ 2:
/*!************************************!*\
  !*** multi ./resources/js/plan.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\project\seasons\resources\js\plan.js */"./resources/js/plan.js");


/***/ })

/******/ });