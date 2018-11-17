<?php 

function merge_sort(&$arr) {
    $arr = merge_sort_split($arr);
}
function merge_sort_split($arr){
    if(count($arr) == 1) return $arr;
    
    $mid = floor(count($arr)/2);
    $left = array_slice($arr, 0 , $mid);
    $right = array_slice($arr, $mid, count($arr));
    $left = merge_sort_split($left);
    
    return merge_sort_merge($left, $right);
}
function merge_sort_merge($left, $right) {
    $result = [];
    while(count($left) && count($right)) {
        if($left[0] < $right[0]){
            $result[] = array_shift($left);
        }else {
            $result[] = array_shift($right);
        }
    }
    return array_merge($result, $left, $right);
}
$arr = [10,3,4,52,6,8,0,1];
merge_sort($arr);
echo implode(', ', $arr);
