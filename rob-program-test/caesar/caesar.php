<?php
// n文字分ずらす
function caesar($n, $word){
    
    $fund = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $splitArr = str_split($fund);
    $inputArr = str_split($word);
    
    foreach($inputArr as $key => $val){
        foreach($splitArr as $ke => $value){
            if($value == $val){
                $caseWords .= $ke-$n < 0 ? $splitArr[count($splitArr)-$n] : $splitArr[$ke-$n];
            }
        }
    }
    print_r($caseWords);
}
// caesar(3,'TAKAO'); -> QXHXL

// $fund = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
// $tmp = substr($fund, 4).substr($fund, 0, 4);
// print_r($tmp);

