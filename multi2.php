<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $total = $num1+$num2+$num3;
    $avg = ($num1+$num2+$num3)/3;

    echo $num1."<br/>";
    echo $num2."<br/>";
    echo $num3."<br/>";

    echo $total."<br/>";
    echo $avg."<br/>";
?>