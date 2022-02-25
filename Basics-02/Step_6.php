<?php
function sum($n){
    $total = 0;
    $n = $n.'';
    for ($i=0; $i < strlen($n); $i++) { 
        $total += $n[$i];
    }
    echo $total;
}
sum(54321);
?>