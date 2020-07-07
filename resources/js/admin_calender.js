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
