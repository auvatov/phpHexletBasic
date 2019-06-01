<?php

function fib($serialNumber)
{
    
    if ($serialNumber === 0) {
        return 0;
    } else {
        $a = 0;
        $b = 1;
        for ($i = 1; $i < $serialNumber; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
        return $c;
    }
}

var_dump(fib(3));
var_dump(fib(5));
var_dump(fib(10));
var_dump(fib(30));
