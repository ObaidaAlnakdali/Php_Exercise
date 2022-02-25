<?php
    function greaterFn($num){
        if($num > 30){
            echo"$num is greater than 30\n";
        } elseif($num > 20){
            echo"$num is greater than 20\n";
        } elseif($num > 10){
            echo"$num is greater than 10\n";
        } else {
            echo"$num is less than 10\n";
        }
    return 'string';
    }
    greaterFn(40); // 40 is greater than 30
    greaterFn(21); // 21 is greater than 20
    greaterFn(12); // 12 is greater than 10
    greaterFn(8);  // 8 is less than 10
?>