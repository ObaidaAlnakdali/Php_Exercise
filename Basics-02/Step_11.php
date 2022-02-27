<?php
    function isPrime($n){
        $x = $n / 2 ;
        if ($n == 1)
            return 0;
        for ($i = 2 ; $i < $x ; $i++) { 
            if($n % $i == 0){
                return "$n is not prime";
            }
        }
        return "$n is prime";
    }
    print_r(isPrime(17)."\n");
    print_r(isPrime(23)."\n");
    print_r(isPrime(5)."\n");
    print_r(isPrime(33)."\n");
    print_r(isPrime(36)."\n");
    print_r(isPrime(100)."\n");
?>