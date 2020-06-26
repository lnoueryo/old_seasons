

$(document).ready(function(){
    if (matchMedia('(max-width: 798px)').matches) {
        $('.abc').addClass('delete');
        $('.global-nav__list').removeClass('delete');
        $('#media').show();
        $('.nav1').addClass('delete');
        $('.booking-btn-flame-sm').removeClass('delete');
        $('.booking-btn-flame').addClass('delete');
        $('.header li').removeClass('p-3');
    }


  });






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

  $(function(){
    $("#tabMenu li a").on("click", function() {

    $("#tabBoxes div").hide();
    $($(this).attr("href")).fadeToggle();
    });
    return false;
    });

  $(function(){
    $(".toggle-input").on("click", function() {


    if($(".toggle-input").prop("checked") == true) {
        $("#tabBoxes div").hide();
    $($(".woman").attr("href")).fadeToggle();
    }
        else {
            $("#tabBoxes div").hide();
            $($(".man").attr("href")).fadeToggle();
    }


    });
    return false;
    });

//   $(function(){
//     $(".toggle-input").on("click", function() {
//                 if('input[class=toggle-input]:not:(checked)') {
//             $("#tabBoxes div").hide();
//             $($(".woman").attr("href")).fadeToggle();
//     }
//     });
//     return false;
//     });



  $(function(){
    $(".woman").on("click", function() {
        $('input[type="checkbox"]').prop('checked',true);

    });

    });

  $(function(){
    $(".man").on("click", function() {
        $('input[type="checkbox"]').prop('checked',false);

    });

    });
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 200 && matchMedia('(min-width: 798px)').matches || $(window).scrollTop() <= 500) {
            $('.balloon').removeClass('delete');
            $('.balloon').show(3000);

        } if(($(window).scrollTop() < 200 || $(window).scrollTop() > 500 )) {
            $('.balloon').addClass('delete');
        }

        // if ($(window).scrollTop() >= 200 && matchMedia('(min-width: 798px)').matches || $(window).scrollTop() <= 500) {
        //     $('.balloon').removeClass('delete');
        //     $('.balloon').show(3000);

        // } if(($(window).scrollTop() < 200 || $(window).scrollTop() > 500 )) {
        //     $('.balloon').addClass('delete');
        // }

        if ($(window).scrollTop() >= 710) {
            $('.booking-btn-container').css('position','static');


        }
        if ($(window).scrollTop() < 710) {
            $('.booking-btn-container').css('position','fixed');


        }
      });





