<?php
// Your code here!
$arr = [3,2,6,8,1];

for($i=0; $i<count($arr); $i++){
    $min = $arr[$i];
    $m_p = $i;
    for($j=$i+1; $j<count($arr); $j++){
        if($min > $arr[$j]){
            $min = $arr[$j];
            $m_p = $j;
        }
    }
    $tmp=$arr[$i]; //最小値と最初の数を入れ替え
    $arr[$i]=$min;
    $arr[$m_p]=$tmp;    
}

print_r($arr);
?>
