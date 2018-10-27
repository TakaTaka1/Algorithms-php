<?php
// ants問題
$l =10;
$n =[2,6,7];
function ants($l, $n){
    
    $min_t=0;
    for($i=0; $i<count($n); $i++){
        $min_t = max($min_t, min($n[$i] ,$l-$n[$i]));
    }

    $max_t=0;
    for($i=0; $i<count($n); $i++){
        $max_t = max($max_t, max($n[$i] ,$l-$n[$i]));
    }    
    
    
    print_r($min_t);
    print_r($max_t);
    
}

ants($l, $n);
?>

