<?php
// Your code here!
function createTriangle($arr){
    $ans =0;
    
    for($i=0; $i<count($arr); $i++){
        for($j=$i+1; $j<count($arr); $j++){
            for($k=$j+1; $k<count($arr); $k++){
                $len = $arr[$i] + $arr[$j] + $arr[$k];
                $max = max($arr[$i],max($arr[$j],$arr[$k]));
                $rest = $len -$max;
                if($max < $rest){
                    $ans = max($ans,$len);
                }                
            }   
        }
    }
    print_r($ans);
}
$data = [2,3,4,5,10];
createTriangle($data);
?>

