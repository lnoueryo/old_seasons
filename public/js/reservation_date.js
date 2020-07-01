$(function(){
    // $('#tabBox1 input[value="×"]').css({'color':'#696969','font-weight':'600'});
    // $('#tabBox1 input[value="〇"]').css({'color':'#4b9dd8;','font-weight':'600'});
    $('#booking-calender input[value="×"]').css({'color':'#696969','font-weight':'600'});
    $('#booking-calender input[value="〇"]').css({'color':'#d84b6a','font-weight':'600'});
    });






    // $(document).ready(function(){
    //     if (matchMedia('(max-width: 798px)').matches) {
    //         $('.back-container-sm').show();
    //         $('.back-container-pc').hide();
    //     } else {
    //         $('.back-container-sm').hide();
    //         $('.back-container-pc').show();
    //     }


    //   });


    // ↓ブラウザバックを無効にする処理↓



    $(function(){
        history.pushState(null, null, null); //ブラウザバック無効化
        //ブラウザバックボタン押下時
        $(window).on("popstate", function (event) {
          history.pushState(null, null, null);
          window.alert('前のページに戻る場合、下記の戻るボタンからお戻りください。');
        });
       });



    // ↑ブラウザバックを無効にする処理↑





    //    ↓既存の予約の所要時間を考慮して×をつける処理(6時間まで)↓



    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '1時間'){

            for (j=0; j< 15; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }

    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '1.5時間'){

            for (j=0; j< 29; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }


    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '2時間'){

            for (j=0; j< 43; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }


    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '2.5時間'){

            for (j=0; j< 57; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }

    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '3時間'){

            for (j=0; j< 71; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }

    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '3.5時間'){

            for (j=0; j< 85; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }

    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '4時間'){

            for (j=0; j< 99; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }

    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];

        if(abc.placeholder === '4.5時間'){

            for (j=0; j< 113; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }

    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '5時間'){

            for (j=0; j< 127; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }

    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '5.5時間'){

            for (j=0; j< 141; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }

    for (i=0; i< document.Form.length-1; i++) {
        var abc = document.Form.elements[i];


        if(abc.placeholder === '6時間'){

            for (j=0; j< 155; j+=14) {
                document.Form.elements[i+j].value = "×";
                document.Form.elements[i+j].classList.add('disabled');

            }

    }

    }



        //    ↑既存の予約の所要時間を考慮して×をつける処理↑





    // ↓現在予約しようとしているお客様の所要時間を考慮して×をつける処理(6時間まで)↓



    60
    for (i=0; i< document.Form.length-1; i++) {

    if(document.Form.elements[i].name == '1時間'){


    if(document.Form.elements[i+14].value == "×") {
        document.Form.elements[i].value = "×";
        document.Form.elements[i].classList.add('disabled');

    }
    if(!document.Form.elements[i+14].value) {
        for (j=0; j< 14; j++) {
            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');

        }


    }
}

}

    90
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '1.5時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       else if(!document.Form.elements[i+28].value) {
            for (k=0; k< 28; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}

    120
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '2時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+42].value) {
            for (k=0; k< 42; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}

    150
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '2.5時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+56].value == "×") {
        for (j=0; j< 55; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+56].value) {
            for (k=0; k< 56; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}

    180
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '3時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+56].value == "×") {
        for (j=0; j< 55; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+70].value == "×") {
        for (j=0; j< 69; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+70].value) {
            for (k=0; k< 70; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}

    210
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '3.5時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+56].value == "×") {
        for (j=0; j< 55; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+70].value == "×") {
        for (j=0; j< 69; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+84].value == "×") {
        for (j=0; j< 83; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+84].value) {
            for (k=0; k< 84; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}
    240
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '4時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+56].value == "×") {
        for (j=0; j< 55; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+70].value == "×") {
        for (j=0; j< 69; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+84].value == "×") {
        for (j=0; j< 83; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+98].value == "×") {
        for (j=0; j< 97; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+98].value) {
            for (k=0; k< 98; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}

    270
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '4.5時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+56].value == "×") {
        for (j=0; j< 55; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+70].value == "×") {
        for (j=0; j< 69; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+84].value == "×") {
        for (j=0; j< 83; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+98].value == "×") {
        for (j=0; j< 97; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+112].value == "×") {
        for (j=0; j< 111; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+112].value) {
            for (k=0; k< 112; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}
    300
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '5時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+56].value == "×") {
        for (j=0; j< 55; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+70].value == "×") {
        for (j=0; j< 69; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+84].value == "×") {
        for (j=0; j< 83; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+98].value == "×") {
        for (j=0; j< 97; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+112].value == "×") {
        for (j=0; j< 111; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+126].value == "×") {
        for (j=0; j< 125; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+126].value) {
            for (k=0; k< 126; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}

    330
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '5.5時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+56].value == "×") {
        for (j=0; j< 55; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+70].value == "×") {
        for (j=0; j< 69; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+84].value == "×") {
        for (j=0; j< 83; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+98].value == "×") {
        for (j=0; j< 97; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+112].value == "×") {
        for (j=0; j< 111; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+126].value == "×") {
        for (j=0; j< 125; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+140].value == "×") {
        for (j=0; j< 139; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+140].value) {
            for (k=0; k< 140; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}
    360
    var length_of_time = document.getElementById('length_of_time');
    if(length_of_time.value == '6時間'){
for (i=0; i< document.Form.length-1; i++) {
    if(document.Form.elements[i+14].value == "×") {

            document.Form.elements[i].value = "×";
            document.Form.elements[i].classList.add('disabled');
        }
    if(document.Form.elements[i+28].value == "×") {
        for (j=0; j< 27; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+42].value == "×") {
        for (j=0; j< 41; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+56].value == "×") {
        for (j=0; j< 55; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+70].value == "×") {
        for (j=0; j< 69; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+84].value == "×") {
        for (j=0; j< 83; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+98].value == "×") {
        for (j=0; j< 97; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+112].value == "×") {
        for (j=0; j< 111; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+126].value == "×") {
        for (j=0; j< 125; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+140].value == "×") {
        for (j=0; j< 139; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
    if(document.Form.elements[i+156].value == "×") {
        for (j=0; j< 155; j+=14) {

            document.Form.elements[i+j].value = "×";
            document.Form.elements[i+j].classList.add('disabled');
        }
        }
       if(!document.Form.elements[i+156].value) {
            for (k=0; k< 156; k++) {
                document.Form.elements[i+k].value = "×";
                document.Form.elements[i+k].classList.add('disabled');

            }
        }



}

}



    // ↑現在予約しようとしているお客様の所要時間を考慮して×をつける処理↑
