<?php

function div(&$n, &$count){
    if($n % 5 !== 0){
        $count++;
    }
    $n--;
    if($n ==0){
        //print_r($count);
        return;
    }
    div($n, $count);
}
$n=10;
$count = 0;
div($n,$count);
print_r($count);
