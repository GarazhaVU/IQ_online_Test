<?php


function calculator ($sumn1, $daysn, $daysy) {// калькулятор
    return $sumn1 + $sumn1 * $daysn * (0.1 / $daysy);
}


function days_in_year ($year) {// функция вычисления количества дней в году
    $days = 0;
    for ($i = 1; $i < 13; $i++){
        $days += cal_days_in_month(CAL_GREGORIAN, $i, $year); 
    }
    return $days;
}


$deposit_registration_date = $_POST['deposit_registration_date'];   //}
$summn_1 = $_POST['deposit_amount'];
$term_of_deposit = (int)$_POST['term_of_deposit'];                       // получение данных черех POST
$deposit_replenishment = $_POST['deposit_replenishment'];
$summadd = $_POST['deposit_replenishment_amount'];                  //}


if ($deposit_registration_date != null and $summn_1 != null and $term_of_deposit != null) { //проверка значений

    if ( ($deposit_replenishment == "1" and $summadd != null) or ($deposit_replenishment == "0") ) {
        
        $date = explode ('.' , $deposit_registration_date);
        $number_mount = (int)$date[1]; // выбранный месяц
        $years = (int)$date[2]; // выбранный год
        $daysm1 = cal_days_in_month(CAL_GREGORIAN, $number_mount,$years) - (int)$date[0];//количество дней в месяце вклада
        $daysy1 = days_in_year($years); // количество дней в году
        $sumn11 = $summn_1;
        
        if ($deposit_replenishment == "1") { // c пополнением вклада
            for ($i = 0; $i < 12 * $term_of_deposit; $i++) {
                if($i < (12 * $term_of_deposit) - 1) {$sumn11 = calculator($sumn11, $daysm1, $daysy1); $sumn11 += $summadd;}
                if($number_mount == 13){ $number_mount = 1; $years += 1;}
                $daysm1 = cal_days_in_month(CAL_GREGORIAN, $number_mount,$years);
                $daysy1 = days_in_year($years);
            }
            echo round($sumn11, 2);
            echo " руб.";
        } else{                             //без пополнения вклада
            for ($i = 0; $i < 12 * $term_of_deposit; $i++) {
                $daysm1 = cal_days_in_month(CAL_GREGORIAN, $number_mount,$years);
                $daysy1 = days_in_year($years);
                $sumn11 = calculator($sumn11 , $daysm1, $daysy1);
                $number_mount += 1;
                if($number_mount == 13) { $number_mount = 1; $years += 1;}
            }
            echo round($sumn11, 2);
            echo " руб.";
        }
    } else echo "Введите поле 'Сумма пополнения вклада'";
} else echo "Заполните все поля";
?>