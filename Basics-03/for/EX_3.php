<?php
    $str = "*";
    $n = 5;
    for ($i = 0; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $str;
        }
        echo "\n";
    }
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $str;
        }
        echo "\n";
    }

    // $star = '*';
    // echo "$star\n";
    // for ($i=9; $i > 0; $i--) { 
    //     if($i > 5){
    //         $star .= "*";
    //         echo "$star\n";
    //     }else{
    //         echo "$star\n";
    //         $star = substr($star, 0, -1);
    //     }
    // }
