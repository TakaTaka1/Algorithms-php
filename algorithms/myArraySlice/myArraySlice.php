<?php
$arr = [1,2,3,4,5,6,7,8,9,10];
$sliceSize = 3;

function sliceArray($arr, $sliceSize){
    $count =0;
    $returnArr =[];
    $size = count($arr);
    
    for($i=0; $i<=$size; $i+=$sliceSize){
        $end = $i + $sliceSize;
        if($size < $end){
            $end = $size;
        }
        for($j=$i; $j<$end; $j++){
            $returnArr[$count][] = $arr[$j];
        }
        $count++;
    }
    return $returnArr;
}

print_r(sliceArray($arr, $sliceSize));

?>
