<?php
    $day = $_POST['day'];
    $days = $day%7;
    switch ($days){
        case 0:
            echo "입력한 날짜는 일요일입니다.";
            break;
        case 1:
            echo "입력한 날짜는 월요일입니다.";
            break;
        case 2:
                echo "입력한 날짜는 화요일입니다.";
                break;
        case 3:
            echo "입력한 날짜는 수요일입니다.";
            break;
        case 4:
            echo "입력한 날짜는 목요일입니다.";
            break;
        case 5:
            echo "입력한 날짜는 금요일입니다.";
            break;
        case 6:
            echo "입력한 날짜는 토요일입니다.";
            break;
        default:
        echo "유용한 값이 아님";
    }
?>