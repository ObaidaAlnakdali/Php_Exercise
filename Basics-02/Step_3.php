<?php
    $var1 = 32;
    $var2 = 45;

    function Swap($a, $b){
        $a = $b + $a;
        $b = $a - $b;
        $a = $a - $b;
        echo"var1 = $a\nvar2 = $b";
    }

    Swap($var1, $var2)
?>