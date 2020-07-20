$(document).ready(function(){
    if (matchMedia('(max-width: 960px)').matches) {
        $('.global-nav__list').removeClass('delete');
        $('#media').show();
        $('.nav1').addClass('delete');
        $('.header li').removeClass('p-3');

    }

  });


  // ↓ドロワー↓

  function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('js-hamburger');
    var blackBg = document.getElementById('js-black-bg');

    hamburger.addEventListener('click', function() {
      body.classList.toggle('nav-open');
    });
    blackBg.addEventListener('click', function() {
      body.classList.remove('nav-open');
    });
  }
  toggleNav();

//   ↑ドロワー↑
$(function() {
    for (var i = 0; i < $('form[name="Form"] td').length - 1; i++) {

        for (var l = 0; l < 16; l += 1) {
          if ($('form[name="Form"] td').eq(i).attr('class') === 'time' + (1 + 0.5 * l) + '時間') {
            for (var j = 14; j < 14 * l + 15; j += 14) {
              $('form[name="Form"] td').eq(i + j).text("×");
              $('form[name="Form"] td').eq(i + j).attr('disabled', true);
            }
          }
      }
  }
})  
