<?php
$birth_year = 2222;
$current_year = 2021;
if(abs($birth_year - $current_year) > 18){
    echo'You can drive';
}else{
    echo'You still a kid, go and play GTA';
}
?>