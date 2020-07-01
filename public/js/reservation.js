$(document).ready(function(){
    if (matchMedia('(max-width: 960px)').matches) {
        $('.plan-footer-container-pc').addClass('delete');
        $('.plan-footer-container').removeClass('delete');

    } else {
        $('.plan-footer-container-pc').removeClass('delete');
        $('.plan-footer-container').addClass('delete');

    }


  });
