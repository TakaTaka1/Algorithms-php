<?php
function binaryS($arr, $find){
    $left = 0;
    $right = count($arr)-1;
    while($left <= $right){
        $mid = floor(($left+$right)/2);
        if($find < $arr[$mid]){
            $right = $mid -1;
        }
        if($find > $arr[$mid]){
            $left = $mid +1;
        }
        if($arr[$mid] == $find){
            
            return $result = "配列の{$mid}番目に見つかりました。";
        }
    }
    return $result = "配列の中では見つかりませんでした。";
}
