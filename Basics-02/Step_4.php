<?php
    function armstrong($n){
        $sum = 0 ;
        $s = $n.'';
        for ($i=0; $i < 3 ; $i++) { 
            $sum = $sum + pow($s[$i],3);
        }
        if($n == $sum){
            echo'true';
        }else {
            echo'false';
        }
    }
    armstrong(153);
?>