<?php
    $num = $_POST['num'];
    $sum = 0;
    if($num > 10){
        $sum = $num*1500;
    }else{
        $sum = $num*2000;
    }
    echo "과자의 총 가격은".$sum."입니다";
?>