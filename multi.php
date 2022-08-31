<?php
    $num = $_GET['num'];
    $re = 0;
    for($i = 1; $i < 10; $i++){
        $re = $num * $i;
        echo $num."*".$i."=".$re."<br/>";
    }
?>