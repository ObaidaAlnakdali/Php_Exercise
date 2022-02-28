<?php
    function sum($n){ 
        $factorial = 0;
        $n = $n.'';
        for ($i=0; $i < strlen($n); $i++) { 
            $factorial += $n[$i];
        }
        echo "$factorial\n";
    }
    sum(12345); 
    sum(9999); 
?>