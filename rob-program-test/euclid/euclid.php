<?php
// ユークリッドの互除法

// 計算例) 1071 と 1029 の最大公約数を求める。
// 1071 を 1029 で割った余りは 42
// 1029 を 42 で割った余りは 21
// 42 を 21 で割った余りは 0
// よって、最大公約数は21である。

// function euclid($x, $y){
//     $a = $x < $y ? $x : $y;
//     $b = $x < $y ? $y : $x;
//     while($a !==0){
//         $tmp = $a;
//         $a = $b%$a;
//         $b = $tmp;
//     }
//     return $b;
// }

function euclid($x, $y){
    while($y !==0){
        $tmp = $x%$y;
        $x = $y;
        $y = $tmp;
    }
    return $x;
}


var_dump(euclid(50, 110)); 


