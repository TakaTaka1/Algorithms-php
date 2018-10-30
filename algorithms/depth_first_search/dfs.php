<?php
$arr =[1,2,5,10];
$k=13;
$n=4;

function depth($arr, $k,$n,$sum=0, $i=0){
    if($i == $n) {
        return $sum == $k;
    };
    if(depth($arr, $k,$n, $sum, $i+1)){ return true; }
    if(depth($arr, $k,$n, $sum+$arr[$i], $i+1)){ return true; }
    return false;
    
}

var_dump(depth($arr, $k,$n,0,0));


?>

