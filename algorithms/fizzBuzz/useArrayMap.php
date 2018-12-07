<?php
$fizzBuzz = function($a){
    
    if($a % 3 == 0 && $a % 5 ==0){
        return "($a) fizzBuzz";
    }
    if($a % 3 == 0){
        return "($a) fizz";
    }
    if($a % 5 == 0){
        return "($a) Buzz";
    }
       
};

$arr = range(1, 100);
print_r($arr);
print_r(array_map($fizzBuzz, $arr));
