<?php
    function paint($str){
        echo "$str \n";
        $a = 0;
            while ($a <= 10) {
                $str .= "*";
                echo "$str \n";
                $a++;
        }
    }
    paint("*"); 
?>