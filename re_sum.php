<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = 0;
    for($i = $num1; $i <= $num2; $i++){
        $sum = $sum + $i;
    }
    echo $num1."과".$num2."사이의 합은".$sum."입니다";
?>