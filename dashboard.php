<?php
?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-1.12.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="systems.css">
    <script src="symptoms.js"></script>
    <meta charset="UTF-8">
    <title>Системи органів</title>
</head>
<body style="background-image: url('cs.jpg');">
<div class="container" id="cont">
    <h3>Виберіть системи оранів, які Вас турбують: </h3>
    <hr class=colorgraph>
    <div class="[ form-group ]">
        <input type="checkbox" name="fancy-checkbox-danger" id="fancy-checkbox-danger" autocomplete="off"/>
        <div class="[ btn-group ]">
            <label for="fancy-checkbox-danger" class="[ btn btn-danger ]">
                <span class="[ glyphicon glyphicon-ok ]"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-danger" class="[ btn btn-default active ]">
                Кровоносна система (серцево-судинна і лімфатична)
            </label>
        </div>
    </div>
    <hr/>
    <div class="[ form-group ]">
        <input type="checkbox" name="fancy-checkbox-warning" id="fancy-checkbox-warning" autocomplete="off"/>
        <div class="[ btn-group ]">
            <label for="fancy-checkbox-warning" class="[ btn btn-warning ]">
                <span class="[ glyphicon glyphicon-ok ]"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-warning" class="[ btn btn-default active ]">
                Видільна система
            </label>
        </div>
    </div>
    <hr/>
    <div class="[ form-group ]">
        <input type="checkbox" id="fancy-checkbox-nerv" autocomplete="off"/>
        <div class="[ btn-group ]">
            <label for="fancy-checkbox-nerv" class="[ btn ]" id="nerv">
                <span class="[ glyphicon glyphicon-ok ]"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-nerv" class="[ btn btn-default active ]">
                Нервова система і органи чуття
            </label>
        </div>
    </div>
    <hr/>
    <div class="[ form-group ]">
        <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" autocomplete="off"/>
        <div class="[ btn-group ]">
            <label for="fancy-checkbox-success" class="[ btn btn-success ]">
                <span class="[ glyphicon glyphicon-ok ]"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-success" class="[ btn btn-default active ]">
                Травна система
            </label>
        </div>
    </div>
    <hr/>
    <div class="[ form-group ]">
        <input type="checkbox" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off"/>
        <div class="[ btn-group ]">
            <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                <span class="[ glyphicon glyphicon-ok ]"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-info" class="[ btn btn-default active ]">
                Дихальна система
            </label>
        </div>
    </div>
    <hr/>
    <div class="[ form-group ]">
        <input type="checkbox" id="fancy-checkbox-skelet" autocomplete="off"/>
        <div class="[ btn-group ]">
            <label for="fancy-checkbox-skelet" class="[ btn ]" id="skelet">
                <span class="[ glyphicon glyphicon-ok ]"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-skelet" class="[ btn btn-default active ]">
                Опорно-рухова система (м'язи і скелет)
            </label>
        </div>
    </div>
    <hr/>
    <div class="[ form-group ]">
        <input type="checkbox" id="fancy-checkbox-skin" autocomplete="off"/>
        <div class="[ btn-group ]">
            <label for="fancy-checkbox-skin" class="[ btn ]" id="skin">
                <span class="[ glyphicon glyphicon-ok ]"></span>
                <span> </span>
            </label>
            <label for="fancy-checkbox-skin" class="[ btn btn-default active]">
                Покривна система
            </label>
        </div>
    </div>
    <hr/>
    
</div>
<div class="container">
    <div class="row" id="cont2">
<div class="col-md-12"id="accept">
        <button type="button" id="buttonAccept" class="btn btn-success">Прийняти</button>
    </div>
    </div>

</div>

    </div>
<div class="container">
<div class="row" id="cont3">

</div>
<p align="center"><a href="index.php">Хвороби</a></p>
    </div>
    <script>
    // $('.all').on('click', function(e){
// $this = this;
// $.each($(this).parents('ul').find('input'), function(i, item){
//  $(item).prop('checked', $this.checked);
// });
// });
var circulary = {
    "array": ['Біль в серці', 'Підвищений тиск', 'Понижений тиск']
};
var urinary = {
    "array": ['Біль в нирках']
};
var nervous = {
    "array": ['Біль в вухах', 'Біль в очах', 'Стрес', 'Тривога']
}
var digestive = {
    "array": ['Нудота', 'Біль в животі', 'Блювота', 'Діарея', 'Здуття']
}
var respiratory = {
    "array": ['Нежить', 'Біль в горлі', 'Сухий кашель', 'Вологий кашель', 'Чхання', 'Задишка','Гній в горлі', 'Збільшені мигдалики']
}
var skeletal = {
    "array": ['Біль в суглобах', 'Слабкість', 'Біль в м\'язах']
}
var integumentary = {
    "array": ['Поріз', 'Почервоніння']
}
$(function () {
    var secondStep = false;
    function sendAjax() {
        var i = 0;
        var nazvayakas = [];
        nazvayakas[i] = true;
        $("#cont").hide();
        nazvayakas[++i] = $("#fancy-checkbox-danger").is(":checked");
        nazvayakas[++i] = $("#fancy-checkbox-warning").is(":checked");
        nazvayakas[++i] = $("#fancy-checkbox-nerv").is(":checked");
        nazvayakas[++i] = $("#fancy-checkbox-success").is(":checked");
        nazvayakas[++i] = $("#fancy-checkbox-info").is(":checked");
        nazvayakas[++i] = $("#fancy-checkbox-skelet").is(":checked");
        nazvayakas[++i] = $("#fancy-checkbox-skin").is(":checked");
        var count = 0;
        for (var j = 0; j < nazvayakas.length; j++) {
            if (nazvayakas[j]) {
                count++;
            }
        }
        var count2 = 0;


        if (nazvayakas[7]) {
            var text = '<div class="col-md-4">'+
                '<h4 id="integumentary">Покривна система</h4>' +
                '<ul>';

            for (var j = 0; j < integumentary.array.length; j++) {
                text +='<li><label><input type="checkbox" id = "integumentary-' + count2 + '">' + integumentary.array[j] + '</label></li>';
                count2++;
            }
            text += '</ul>' + '</div>';
            $("#cont2").prepend(text);
        }
        count2 = 0;
        if (nazvayakas[6]) {
            var text = '<div class="col-md-4">'+
                '<h4 id="skeletal">Опорно-рухова система</h4>' +
                '<ul>';

            for (var j = 0; j < skeletal.array.length; j++) {
                text +='<li><label><input type="checkbox" id = "skeletal-' + count2 + '">' + skeletal.array[j] + '</label></li>';
                count2++;
            }
            text += '</ul>' + '</div>';
            $("#cont2").prepend(text);
        }

        count2 = 0;
        if (nazvayakas[5]) {
            var text = '<div class="col-md-4">'+
                '<h4 id="respiratory">Дихальна система</h4>' +
                '<ul>';

            for (var j = 0; j < respiratory.array.length; j++) {
                text +='<li><label><input type="checkbox" id = "respiratory-' + count2 + '">' + respiratory.array[j] + '</label></li>';
                count2++;
            }
            text += '</ul>' + '</div>';
            $("#cont2").prepend(text);
        }

        count2=0

        if (nazvayakas[4]) {
            var text = '<div class="col-md-4">'+
                '<h4 id="digestive">Травна система</h4>' +
                '<ul>';

            for (var j = 0; j < digestive.array.length; j++) {
                text +='<li><label><input type="checkbox" id = "digestive-' + count2 + '">' + digestive.array[j] + '</label></li>';
                count2++;
            }
            text += '</ul>' + '</div>';
            $("#cont2").prepend(text);
        }

        count2 = 0;


        if (nazvayakas[3]) {
            var text = '<div class="col-md-4">'+
                '<h4 id="nervous">Нервова система</h4>' +
                '<ul>';

            for (var j = 0; j < nervous.array.length; j++) {
                text +='<li><label><input type="checkbox" id = "nervous-' + count2 + '">' + nervous.array[j] + '</label></li>';
                count2++;
            }
            text += '</ul>' + '</div>';
            $("#cont2").prepend(text);
        }

        count2 = 0;

        if (nazvayakas[2]) {
            var text = '<div class="col-md-4">' +
                '<h4 id="urinary">Видільна система </h4>' +
                '<ul>';

            for (var j = 0; j < urinary.array.length; j++) {
                text += '<li><label><input type="checkbox" id = "urinary-' + count2 + '">' + urinary.array[j] + '</label></li>';
                count2++;
            }
            text += '</ul>' + '</div>';
            $("#cont2").prepend(text);
        }

         if (nazvayakas[1]) {
            var text = '<div class="col-md-4">' +
                '<h4 id="circulary">Кровоносна система</h4>' +
                '<ul>';
            //$("#cont2").append(
            //    '<div class="col-md-6">' +
            //    '<h4 id="circulary">Кровоносна система</h4>' +
            //    '<ul>');

            for (var j = 0; j < circulary.array.length; j++) {
                text += '<li><label><input type="checkbox" id="circulary-' + count2 + '">' + circulary.array[j] + '</label></li>';
                count2++;
            }
            text += '</ul>' + '</div>';
            $("#cont2").prepend(text);
        }

    
        if (nazvayakas[0]) {
            $("#cont2").prepend('<div class="col-md-4">' +
                '<h4> Загальні симптоми: </h4>' +
                '<ul>' +
                '<li><label><input type="checkbox" name="temperature" id="id-0"> Підвищена температура </label></li>' +
                '<li><label><input type="checkbox" name="high_temperature" id="id-1"> Висока температура</label></li>' +
                '<li><label><input type="checkbox" name="headache" id="id-2"> Головний біль </label></li>' +
                '</ul>' +
                '</div>');
        }
        
        secondStep = true;
        // $("#cont2").append('<div id = "accept" class="col-md-12">'+ 
// '<button type="button" id="buttonAccept2" class="btn btn-success">Прийняти</button>'+
// '</div>');
    }

    function func() {

        var miId = -1;
        var text = '';

        if($("#id-0").is(":checked")&&$("#respiratory-0").is(":checked")||$("#respiratory-4").is(":checked")&&$("#skeletal-1").is(":checked")){
            text = 'Застуда';
            myId = 0;
        } else

        if($("#id-1").is(":checked")&&$("#respiratory-0").is(":checked")&&$("#respiratory-1").is(":checked")&&$("#respiratory-2").is(":checked")){
            text = 'Грип';
            myId = 1;
        } else
        
        if($("#digestive-0").is(":checked")&&$("#digestive-1").is(":checked")||$("#digestive-2").is(":checked")||$("#digestive-3").is(":checked")){
            text = 'Отруєння';
            myId = 2;
        } else
        
        if($("#urinary-0").is(":checked")){
            text = 'Нефрит';
            myId = 3;
        } else
        
        if($("#nervous-0").is(":checked")){
            text = 'Отит';
            myId = 4;
        }else
        
        if($("#integumentary-1").is(":checked")){
            text = 'Опік';
            myId = 5;
        }else
        
        if($("#id-2").is(":checked")&&$("#circulary-1").is(":checked")){
            text = 'Гіпертонія';
            myId = 6;
        }else

        if($("#respiratory-6").is(":checked")&&$("#respiratory-7").is(":checked")&&$("#respiratory-1").is(":checked")&&$("#id-1").is(":checked")){
            text = 'Ангіна';
            myId = 7;
        }

        $("#cont3").prepend('<h3>Ваш діагноз: '+ text + '</h3>');
        
        jQuery.ajax({
            type: "POST",
            url: 'save.php',
            dataType: 'json',
            data: {functionname: 'add', arguments: [myId, 1]},
            success: function (obj, textstatus) {
                if( !('error' in obj) ) {
                    yourVariable = obj.result;
                }
                else {
                    console.log(obj.error);
                }
            }
        });

    }

    $('#buttonAccept').click(function () {
        if(!secondStep){
            sendAjax();
        } else {
            func();
        }
    });
    
});
    </script>
</body>
</html>
