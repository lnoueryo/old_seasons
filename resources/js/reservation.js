$(document).ready(function(){
    if (matchMedia('(max-width: 960px)').matches) {
        $('.plan-footer-container-pc').addClass('delete');
        $('.plan-footer-container').removeClass('delete');

    } else {
        $('.plan-footer-container-pc').removeClass('delete');
        $('.plan-footer-container').addClass('delete');

    }


  });

  $(function(){
    history.pushState(null, null, null); //ブラウザバック無効化
    //ブラウザバックボタン押下時
    $(window).on("popstate", function (event) {
      history.pushState(null, null, null);
      window.alert('前のページに戻る場合、前に戻るボタンから戻ってください。');
    });
   });
