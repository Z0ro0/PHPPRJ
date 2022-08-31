<?php
    $user = $_POST['username'];
    $kor = $_POST['kor'];
    $eng = $_POST['eng'];
    $ma = $_POST['ma'];
    $sum = $kor + $eng + $ma;
    $avg = $sum/3;
    echo "이름 : ".$user."<br/>";
    echo "국어 : ".$kor."<br/>";
    echo "영어 : ".$eng."<br/>";
    echo "수학 : ".$ma."<br/>";
    echo "총점 : ".$sum."<br/>";
    echo "평균 : ".$avg."<br/>";
?>