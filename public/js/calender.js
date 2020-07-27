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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/calender.js":
/*!**********************************!*\
  !*** ./resources/js/calender.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  if (matchMedia('(max-width: 960px)').matches) {
    $('.global-nav__list').removeClass('delete');
    $('#media').show();
    $('.nav1').addClass('delete');
    $('.header li').removeClass('p-3');
  }
}); //   ↓タブレット、スマホとPCのリンク先を変更↓

$(document).ready(function () {
  if (matchMedia('(max-width: 960px)').matches) {
    $('#booking-btn-1').addClass('delete');
    $('#booking-btn-4').addClass('delete');
  } else {
    $('#booking-btn-2').addClass('delete');
    $('#booking-btn-5').addClass('delete');
  }
}); //   ↑タブレット、スマホとPCのリンク先を変更↑

$(document).ready(function () {
  if (matchMedia('(max-width: 960px)').matches) {
    $('#footer-pc').addClass('delete');
  } else {
    $('#footer-sm').addClass('delete');
  }
});
$(window).scroll(function () {
  // ↓スクロールで吹き出しが出るタイミング↓
  if ($(window).scrollTop() >= 200 && matchMedia('(max-width: 960px)').matches) {
    $('.balloon').removeClass('delete');
    $('.balloon').show(3000);
  }

  if ($(window).scrollTop() <= 500 && matchMedia('(max-width: 960px)').matches) {
    $('.balloon').removeClass('delete');
    $('.balloon').show(3000);
  }

  if ($(window).scrollTop() < 200 || $(window).scrollTop() > 500) {
    $('.balloon').addClass('delete');
  } // ↑スクロールで吹き出しが出るタイミング↑
  //  ↓予約ボタンが定位置に戻るタイミング↓


  if ($(window).scrollTop() >= 900) {
    $('.booking-btn-container').css('position', 'static');
  }

  if ($(window).scrollTop() < 900) {
    $('.booking-btn-container').css('position', 'fixed');
  }
}); //    ↑予約ボタンが定位置に戻るタイミング↑
// ↓ドロワー↓

function toggleNav() {
  var body = document.body;
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');
  hamburger.addEventListener('click', function () {
    body.classList.toggle('nav-open');
  });
  blackBg.addEventListener('click', function () {
    body.classList.remove('nav-open');
  });
}

toggleNav(); //   ↑ドロワー↑
//   ↓トグルスイッチ↓

$(function () {
  $("#tabMenu li a").on("click", function () {
    $("#tabBoxes div").hide();
    $($(this).attr("href")).fadeToggle();
  });
  return false;
});
$(function () {
  $(".toggle-input").on("click", function () {
    if ($(".toggle-input").prop("checked") == true) {
      $("#tabBoxes div").hide();
      $($(".woman").attr("href")).fadeToggle();
    } else {
      $("#tabBoxes div").hide();
      $($(".man").attr("href")).fadeToggle();
    }
  });
  return false;
}); // ↑トグルスイッチ↑
// ↓男性女性の名前をクリックしたときもトグルスイッチが動く設定↓

$(function () {
  $(".woman").on("click", function () {
    $('input[type="checkbox"]').prop('checked', true);
  });
});
$(function () {
  $(".man").on("click", function () {
    $('input[type="checkbox"]').prop('checked', false);
  });
}); // ↑男性女性の名前をクリックしたときもトグルスイッチが動く設定↑
// ↓カレンダー値別カラー↓

$(function () {
  $('#tabBox1 input[value="×"]').css({
    'color': '#696969',
    'font-weight': '600'
  });
  $('#tabBox1 input[value="〇"]').css({
    'color': '#4b9dd8;',
    'font-weight': '600'
  });
  $('#tabBox2 input[value="×"]').css({
    'color': '#696969',
    'font-weight': '600'
  });
  $('#tabBox2 input[value="〇"]').css({
    'color': '#d84b6a',
    'font-weight': '600'
  });
}); // ↑カレンダー値別カラー↑
// ↓予約の所要時間によって×の数を増やす処理↓
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '1時間'){
//         for (j=0; j< 15; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '1.5時間'){
//         for (j=0; j< 29; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '2時間'){
//         for (j=0; j< 43; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '2.5時間'){
//         for (j=0; j< 57; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '3時間'){
//         for (j=0; j< 71; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '3.5時間'){
//         for (j=0; j< 85; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '4時間'){
//         for (j=0; j< 99; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '4.5時間'){
//         for (j=0; j< 113; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '5時間'){
//         for (j=0; j< 127; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '5.5時間'){
//         for (j=0; j< 141; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form.length-1; i++) {
//     var Input = document.Form.elements[i];
//     if(Input.placeholder === '6時間'){
//         for (j=0; j< 155; j+=14) {
//             document.Form.elements[i+j].value = "×";
//             document.Form.elements[i+j].classList.add('disabled');
//         }
// }
// }
// {{--
//         form2 --}}
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '1時間'){
//         for (j=0; j< 15; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '1.5時間'){
//         for (j=0; j< 29; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '2時間'){
//         for (j=0; j< 43; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '2.5時間'){
//         for (j=0; j< 57; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '3時間'){
//         for (j=0; j< 71; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '3.5時間'){
//         for (j=0; j< 85; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '4時間'){
//         for (j=0; j< 99; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '4.5時間'){
//         for (j=0; j< 113; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '5時間'){
//         for (j=0; j< 127; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '5.5時間'){
//         for (j=0; j< 141; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// for (i=0; i< document.Form2.length-1; i++) {
//     var Input = document.Form2.elements[i];
//     if(Input.placeholder === '6時間'){
//         for (j=0; j< 155; j+=14) {
//             document.Form2.elements[i+j].value = "×";
//             document.Form2.elements[i+j].classList.add('disabled');
//         }
// }
// }
// ↑予約の所要時間によって×の数を増やす処理↑
// ↓女性のカットの所要時間を考慮して既存の予約の前の〇を×にする処理↓
// 60
// for (var i=0; i< document.Form2.length-1; i++) {
//     if(document.Form2.elements[i+14].value == "×") {
//         document.Form2.elements[i].value = "×";
//         document.Form2.elements[i].classList.add('disabled');
//     }
//     }
// ↑女性のカットの所要時間を考慮して既存の予約の前の〇を×にする処理↑

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/calender.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\project\seasons\resources\js\calender.js */"./resources/js/calender.js");


/***/ })

/******/ });