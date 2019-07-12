<?php

$arr = [3,2,6,8,1];
for($i=0; $i<count($arr)-1; $i++){
    for($j=1; $j<count($arr); $j++){
        if($arr[$j] < $arr[$j-1]){
            $x = $arr[$j-1];
            $arr[$j-1] = $arr[$j];
            $arr[$j] = $x;
        }   
    }
}

print_r($arr);

?>

