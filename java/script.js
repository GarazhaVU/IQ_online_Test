function change_slyder_value (){
    let numbervalue = document.getElementById("numbervalue");
    let slydervalue = document.getElementById("slydervalue");
    numbervalue.value = slydervalue.value;
}


function change_nuber_value (){
    let numbervalue = document.getElementById("numbervalue");
    let slydervalue = document.getElementById("slydervalue");
    slydervalue.value = numbervalue.value;
}


function change_slyder_value_two (){
    let numbervalue = document.getElementById("numbervalue_two");
    let slydervalue = document.getElementById("slydervalue_two");
    numbervalue.value = slydervalue.value;
}


function change_nuber_value_two (){
    let numbervalue = document.getElementById("numbervalue_two");
    let slydervalue = document.getElementById("slydervalue_two");
    slydervalue.value = numbervalue.value;
}


function clearyears (){
    let yearsvalue = document.getElementById("yearsvalue");
    yearsvalue.value = null;
}


$( function() {
    $.datepicker.regional['ru'] = {
        closeText: 'Закрыть',
        prevText: 'Пред',
        nextText: 'След',
        currentText: 'Сегодня',
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
        'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
        'Июл','Авг','Сен','Окт','Ноя','Дек'],
        dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        weekHeader: 'Нед',
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''};
    $( "#datepicker" ).datepicker({ minDate: -0});
    $( "#datepicker" ).datepicker("option", "showAnim", "slide" );
    $( "#datepicker" ).datepicker( "option", "dateFormat", "dd.mm.yy" );
    $( "#datepicker" ).datepicker("option", $.datepicker.regional[ "ru" ]);
} );


$(document).ready(function() {
    $("#form_calculator").on("submit",
        function(){
            console.log('')
            $.ajax({
                url: 'calc.php',
                method: 'POST',
                dataType: 'html',
                data: jQuery('#form_calculator').serialize(),
                success: function(data){
                    document.getElementById('result').innerHTML=data;
                }
            });
            return false; 
        }
    );
});
