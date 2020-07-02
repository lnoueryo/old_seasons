$(document).ready(function(){
    if (matchMedia('(max-width: 960px)').matches) {
        $('.global-nav__list').removeClass('delete');
        $('#media').show();
        $('.nav1').addClass('delete');
        $('.header li').removeClass('p-3');

    }

  });

//   ↓タブレット、スマホとPCのリンク先を変更↓

  $(document).ready(function(){
    if (matchMedia('(max-width: 960px)').matches) {
        $('#booking-btn-1').addClass('delete');
        $('#booking-btn-4').addClass('delete');

    } else {
        $('#booking-btn-2').addClass('delete');
        $('#booking-btn-5').addClass('delete');

    }


  });

  //   ↑タブレット、スマホとPCのリンク先を変更↑

  $(document).ready(function(){
    if (matchMedia('(max-width: 960px)').matches) {
        $('.footer-pc').addClass('delete');

    } else {
        $('.footer-sm').addClass('delete');

    }


  });






  $(window).scroll(function(){


    // ↓スクロールで吹き出しが出るタイミング↓


        if ($(window).scrollTop() >= 200 && matchMedia('(max-width: 960px)').matches) {
            $('.balloon').removeClass('delete');
            $('.balloon').show(3000);

        } if ($(window).scrollTop() <= 500 && matchMedia('(max-width: 960px)').matches) {
            $('.balloon').removeClass('delete');
            $('.balloon').show(3000);

        }
        if(($(window).scrollTop() < 200 || $(window).scrollTop() > 500 )) {
            $('.balloon').addClass('delete');
        }

   // ↑スクロールで吹き出しが出るタイミング↑




        //  ↓予約ボタンが定位置に戻るタイミング↓

        if ($(window).scrollTop() >= 900) {
            $('.booking-btn-container').css('position','static');


        }
        if ($(window).scrollTop() < 900) {
            $('.booking-btn-container').css('position','fixed');


        }


    });
        //    ↑予約ボタンが定位置に戻るタイミング↑




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




  //   ↓トグルスイッチ↓

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


    // ↑トグルスイッチ↑

    // ↓男性女性の名前をクリックしたときもトグルスイッチが動く設定↓


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


 // ↑男性女性の名前をクリックしたときもトグルスイッチが動く設定↑


    // ↓カレンダー値別カラー↓


    $(function(){
        $('#tabBox1 input[value="×"]').css({'color':'#696969','font-weight':'600'});
        $('#tabBox1 input[value="〇"]').css({'color':'#4b9dd8;','font-weight':'600'});
        $('#tabBox2 input[value="×"]').css({'color':'#696969','font-weight':'600'});
        $('#tabBox2 input[value="〇"]').css({'color':'#d84b6a','font-weight':'600'});
        });

        // ↑カレンダー値別カラー↑




        // ↓予約の所要時間によって×の数を増やす処理↓


        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '1時間'){

                for (j=0; j< 15; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '1.5時間'){

                for (j=0; j< 29; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }


        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '2時間'){

                for (j=0; j< 43; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }


        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '2.5時間'){

                for (j=0; j< 57; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '3時間'){

                for (j=0; j< 71; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '3.5時間'){

                for (j=0; j< 85; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '4時間'){

                for (j=0; j< 99; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '4.5時間'){

                for (j=0; j< 113; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '5時間'){

                for (j=0; j< 127; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '5.5時間'){

                for (j=0; j< 141; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form.length-1; i++) {
            var Input = document.Form.elements[i];


            if(Input.placeholder === '6時間'){

                for (j=0; j< 155; j+=14) {
                    document.Form.elements[i+j].value = "×";
                    document.Form.elements[i+j].classList.add('disabled');

                }

        }

        }




// {{--
//         form2 --}}

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '1時間'){

                for (j=0; j< 15; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '1.5時間'){

                for (j=0; j< 29; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }


        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '2時間'){

                for (j=0; j< 43; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }


        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '2.5時間'){

                for (j=0; j< 57; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '3時間'){

                for (j=0; j< 71; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '3.5時間'){

                for (j=0; j< 85; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '4時間'){

                for (j=0; j< 99; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '4.5時間'){

                for (j=0; j< 113; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '5時間'){

                for (j=0; j< 127; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '5.5時間'){

                for (j=0; j< 141; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }

        for (i=0; i< document.Form2.length-1; i++) {
            var Input = document.Form2.elements[i];


            if(Input.placeholder === '6時間'){

                for (j=0; j< 155; j+=14) {
                    document.Form2.elements[i+j].value = "×";
                    document.Form2.elements[i+j].classList.add('disabled');

                }

        }

        }


        // ↑予約の所要時間によって×の数を増やす処理↑



        // ↓女性のカットの所要時間を考慮して既存の予約の前の〇を×にする処理↓

        60
        for (i=0; i< document.Form2.length-1; i++) {

        if(document.Form2.elements[i].name == '1時間'){


        if(document.Form2.elements[i+14].value == "×") {
            document.Form2.elements[i].value = "×";
            document.Form2.elements[i].classList.add('disabled');

        }
        if(!document.Form2.elements[i+14].value) {
            for (j=0; j< 14; j++) {
                document.Form2.elements[i+j].value = "×";
                document.Form2.elements[i+j].classList.add('disabled');

            }


        }
    }

    }



        // ↑女性のカットの所要時間を考慮して既存の予約の前の〇を×にする処理↑


