// $(function(){
//     if($('form[name=Form] input').attr('checked').length())
// })

// ↓アコーディオン↓


$(function(){

    $('.s_03 .accordion_one .accordion_header').click(function(){
      $(this).next('.accordion_inner').slideToggle();
      $(this).toggleClass("open");
    });
  });


  // ↑アコーディオン↑


// ↓自動計算アウトプット↓


  $(document).ready(function(){

    $("input").click(function(){

        $('#output').text($('#price').val());
    });
    $("input").click(function(){

        $('#output2').text($('#length_of_time').val());
    });
  });


//   ↑自動計算アウトプット↑




//   ↓値段自動計算+割引↓


  function total() {
    yen = 0;
    time = 0;
    const array = [30,60,90,150,180,60,90,150,30,60,90,30]
    for (i=0; i< document.Form.length-1; i++) {

            if (document.Form.elements[i].checked) {

                if($("#menscut").prop("checked") == true) {
                    $('#coldperm').val(3900);
                    $('#creepperm').val(6100);
                    $('#digitalperm').val(11600);

                    $('#graycolor').val(2800);
                    $('#fashioncolor').val(3900);
                    $('#designcolor').val(10600);

                    if ($("#spa90min").prop("checked") == true){
                        $('#treatments').val(0);
                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    } else if ($("#spa90min").prop("checked") == false){
                        $('#treatments').val(2200);
                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    } else {

                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    }

                } else if($("#ladiescut").prop("checked") == true) {
                    $('#coldperm').val(4000);
                    $('#creepperm').val(6200);
                    $('#digitalperm').val(11700);

                    $('#graycolor').val(2900);
                    $('#fashioncolor').val(4000);
                    $('#designcolor').val(10700);

                    if ($("#spa90min").prop("checked") == true){
                        $('#treatments').val(0);
                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    } else if ($("#spa90min").prop("checked") == false){
                        $('#treatments').val(2200);
                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    } else {

                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    }
                } else if ($("#menscut").prop("checked") == false && $("#ladiescut").prop("checked") == false) {
                    $('#coldperm').val(5500);
                    $('#creepperm').val(7700);
                    $('#digitalperm').val(13200);

                    $('#graycolor').val(4400);
                    $('#fashioncolor').val(5500);
                    $('#designcolor').val(12200);

                    if ($("#spa90min").prop("checked") == true){
                        $('#treatments').val(0);
                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    } else if ($("#spa90min").prop("checked") == false){
                        $('#treatments').val(2200);
                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    } else {

                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    }
                }  else {
                    if ($("#spa90min").prop("checked") == true){
                        $('#treatments').val(0);
                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    } else if ($("#spa90min").prop("checked") == false){
                        $('#treatments').val(2200);
                        yen += eval(document.Form.elements[i].value);
                        time += array[i];
                    } else {

                        yen += eval(document.Form.elements[i].value);
                         time += array[i];
                    }

            }

        }}

    document.Form.price.value = yen + '円';
    if (time === 30 || time === 0) {
    document.Form.length_of_time.value = time + '分';
    } else if(time === 0) {
    document.Form.length_of_time.value = time;
    } else {
    document.Form.length_of_time.value = time/60 + '時間';
    }

    }




    // ↓planのリクエスト用に、別のチェックボックスと同期する処理及び、料金表の割引後の表記変更↓

    var number = 0;
    $('#menscut').click(function() {
        number +=1;

        if (number === 1) {
          document.getElementById('perm1').textContent = '3,900';
          document.getElementById('perm2').textContent = '6,100';
          document.getElementById('perm3').textContent = '11,600';
          document.getElementById('color1').textContent = '2,800';
          document.getElementById('color2').textContent = '3,900';
          document.getElementById('color3').textContent = '10,600';
          $('#cut').val('カット');

        } else {
            document.getElementById('perm1').textContent = '5,500';
            document.getElementById('perm2').textContent = '7,700';
            document.getElementById('perm3').textContent = '13,200';
            document.getElementById('color1').textContent = '4,400';
            document.getElementById('color2').textContent = '5,500';
            document.getElementById('color3').textContent = '12,200';
            number = 0;
            $('#cut').val();
        }
      });

    var number = 0;
    $('#ladiescut').click(function() {
        number +=1;

        if (number === 1) {
          document.getElementById('perm1').textContent = '4,000';
          document.getElementById('perm2').textContent = '6,200';
          document.getElementById('perm3').textContent = '11,700';
          document.getElementById('color1').textContent = '2,900';
          document.getElementById('color2').textContent = '4,000';
          document.getElementById('color3').textContent = '10,700';
          $('#cut').val('カット');

        } else {
            document.getElementById('perm1').textContent = '5,500';
            document.getElementById('perm2').textContent = '7,700';
            document.getElementById('perm3').textContent = '13,200';
            document.getElementById('color1').textContent = '4,400';
            document.getElementById('color2').textContent = '5,500';
            document.getElementById('color3').textContent = '12,200';

            $('#cut').val('');
            number = 0;
        }
      });

    var number2 = 0;
    $('#coldperm').click(function() {
        number2 +=1;

        if (number2 === 1) {
            $('#perm').val('コールドパーマ');
        } else {
            $('#perm').val('');
            number2 = 0;
        }
      });

    var number2 = 0;
    $('#creepperm').click(function() {
        number2 +=1;

        if (number2 === 1) {
            $('#perm').val('クリープパーマ');
        } else {
            $('#perm').val('');
        }
      });

    var number2 = 0;
    $('#digitalperm').click(function() {
        number2 +=1;

        if (number2 === 1) {
            $('#perm').val('デジタルパーマ');
        } else {
            $('#perm').val('');
            number2 = 0;
        }
      });

    var number3 = 0;
    $('#graycolor').click(function() {
        number3 +=1;

        if (number3 === 1) {
            $('#color').val('グレーカラー');
        } else {
            $('#color').val('');
            number3 = 0;
        }
      });

    var number3 = 0;
    $('#fashioncolor').click(function() {
        number3 +=1;

        if (number3 === 1) {
            $('#color').val('ファッションカラー');
        } else {
            $('#color').val('');
            number3 = 0;
        }
      });

    var number3 = 0;
    $('#designcolor').click(function() {
        number3 +=1;

        if (number3 === 1) {
            $('#color').val('3D・デザインカラー');
        } else {
            $('#color').val('');
            number3 = 0;
        }
      });

    var number4 = 0;
    $('#treatments').click(function() {
        number4 +=1;

        if (number4 === 1) {
            $('#treatment').val('トリートメント');
        } else {
            $('#treatment').val('');
            number4 = 0;
        }
      });

    var number5 = 0;
    $('#spa30min').click(function() {
        number5 +=1;

        if (number5 === 1) {
            $('#spa').val('スパ30分コース');
        } else {
            $('#spa').val('');
            number5 = 0;
        }
      });

    var number5 = 0;
    $('#spa60min').click(function() {
        number5 +=1;

        if (number5 === 1) {
            $('#spa').val('スパ60分コース');
        } else {
            $('#spa').val('');
            number5 = 0;
        }
      });

    var number5 = 0;
    $('#spa90min').click(function() {
        number5 +=1;

        if (number5 === 1) {
            $('#spa').val('スパ90分コース');
            document.getElementById('treat').textContent = 'free';
        } else {
            $('#spa').val('');
            document.getElementById('treat').textContent = '2,200';
            number5 = 0;
        }
      });



// ↑planのリクエスト用に、別のチェックボックスと同期する処理及び、料金表の割引後の表記変更↑



// ↓同じnameの項目は一つしか選べないようにするdisabledにする処理↓



    $('input[name=cuts]').click(function() {
      var checked_length = $('input[name=cuts]:checked').length;

      if (checked_length >= 1) {
        $('input[name=cuts]:not(:checked)').prop('disabled', true);
      } else {
        $('input[name=cuts]:not(:checked)').prop('disabled', false);
      }
    });

    $('input[name=perms]').click(function() {
        var checked_length = $('input[name=perms]:checked').length;

        if (checked_length >= 1) {
          $('input[name=perms]:not(:checked)').prop('disabled', true);
        } else {
          $('input[name=perms]:not(:checked)').prop('disabled', false);
        }
      });

    $('input[name=colors]').click(function() {
      var checked_length = $('input[name=colors]:checked').length;

      if (checked_length >= 1) {
        $('input[name=colors]:not(:checked)').prop('disabled', true);
      } else {
        $('input[name=colors]:not(:checked)').prop('disabled', false);
      }
    });

    $('input[name=spas]').click(function() {
        var checked_length = $('input[name=spas]:checked').length;

        if (checked_length >= 1) {
          $('input[name=spas]:not(:checked)').prop('disabled', true);
        } else {
          $('input[name=spas]:not(:checked)').prop('disabled', false);
        }
      });


// ↑同じnameの項目は一つしか選べないようにするdisabledにする処理↑



    // document.getElementById('Form').onsubmit = function() {
    //     const search = document.getElementById('Form').price.value;
    //     document.getElementById('Form').prices.value = `${search} +1000`
    // };
    $('input[type=checkbox]').click(function() {
        var checked_length = $('input[type=checkbox]:checked').length;

        if (checked_length > 0) {
          $('#next').prop('disabled', false);
        } else {
          $('#next').prop('disabled', true);
        }
    })
