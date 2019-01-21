<?php
// Your code here!
$arr = [3,2,6,8,1];
for($i=0; $i<count($arr)-1; $i++){
    for($j=0; $j<count($arr)-$i-1; $j++){
        if($arr[$j] > $arr[$j+1]){
            $x = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $x;
        }   
    }
}
print_r($arr);

?>
