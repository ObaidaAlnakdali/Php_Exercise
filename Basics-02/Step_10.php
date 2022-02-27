<?php
    function passed($str){
        $x = strrev($str);
        if($str === $x){
            return "is palindrome";
        }else{
            return "is not palindrome";
        }
    }

    print_r(passed('Hello')."\n");
    print_r(passed("adda")."\n");
?>