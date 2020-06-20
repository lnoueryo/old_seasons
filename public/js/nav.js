
$('body').hover(function(){
    $('.main-img').addClass('grayscale');
  });


$(window).scroll(function(){
    if ($(window).scrollTop() > 150 && matchMedia('(min-width: 798px)').matches) {
      $('header').addClass('transform');
      $('.main-nav-flame').addClass('transform2');
    } if(($(window).scrollTop() < 100)) {
      $('header').removeClass('transform');
      $('.main-nav-flame').removeClass('transform2');
    }
  });

//   マージントップでヘッダーずらし

// $(window).scroll(function(){
//     if ($(window).scrollTop() > 150 && matchMedia('(min-width: 798px)').matches) {
//       $('header').addClass('transform');
//       $('.main-nav-flame').addClass('transform2');
//       $('header').animate({
//         'margin-top': '-100px'
//       },1000);
//     } if(($(window).scrollTop() < 100)) {
//       $('header').removeClass('transform');
//       $('.main-nav-flame').removeClass('transform2');
//       $('header').animate({
//         'margin-top': '-100px'
//       },1000);
//     }
//   });

$(window).scroll(function(){
    if ($(window).scrollTop() >= 450 && matchMedia('(min-width: 798px)').matches || $(window).scrollTop() <= 1400) {
        $('.hair-img-1').removeClass('img-1');
        $('.hair-img-2').removeClass('img-2');
        $('.hair-img-3').removeClass('img-3');
        $('.hair-img-4').removeClass('img-4');


    } if(($(window).scrollTop() < 450 || $(window).scrollTop() > 1400 )) {
        $('.hair-img-1').addClass('img-1');
        $('.hair-img-2').addClass('img-2');
        $('.hair-img-3').addClass('img-3');
        $('.hair-img-4').addClass('img-4');
    }
  });


  $('body').hover(function(){

  });

//   $('body').hover(function(){
//     $('.img-1').removeClass('img-1');
//   });




$(function() {
    // $('img').animate({
    //   'margin-top': '-100px'
    // },500);
    $('.main-img').animate({
      '-webkit-filter': 'grayscale(0)'
    },1000);
    $('#two-img').addClass('left-imgs-back');

  });






//   $(window).scroll(function(){
//     var element = $('header'),
//          scroll = $(window).scrollTop(),
//          height = element.outerHeight();
//     if ( scroll > height ) {
//       element.addClass('transform');
//     } else {
//       element.removeClass('transform');
//     }
//   });
