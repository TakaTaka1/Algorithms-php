<?php
// Your code here!
$arr = [1,5,10,50,100,500];
$c = [3,2,2,3,0,2];
$val = 620;

function volve($arr, $val,$c){
    $ans = [];
    for($i=5; $i>=0; $i--){
        $t = floor(min($val / $arr[$i], $c[$i]));
        $val -= $t * $arr[$i];
        $ans [$arr[$i]] = $t;
    }
    print_r($ans);
}
print_r(volve($arr, $val,$c));
?>

