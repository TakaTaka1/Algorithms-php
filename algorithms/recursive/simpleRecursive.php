<?php
$arr=[1,2,4,5];
$t =13;
$n=4;

function dfs($arr,$sum=0, $i=0){
    global $n;
    if($n == $i){
        print_r($sum);
        return $sum;
    }
    dfs($arr, $sum+$arr[$i], $i+1);
}

print_r(dfs($arr));


?>

