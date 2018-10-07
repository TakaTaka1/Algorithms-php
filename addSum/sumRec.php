<?php
// Your code here!
$arr = [1,5,6,8,10];
$add=0;
function sumRec($arr, &$add){
        if(!empty($arr)){
                $add += array_shift($arr);
                sumRec($arr, $add);
        }
        return $add;
}
print_r(sumRec($arr, $add));


?>

