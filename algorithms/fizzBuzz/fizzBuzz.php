<?php
// Your code here!

$range = range(1,100);


function fizzbuzz ($range) {
    
    foreach($range as $val) {
        if($val % 3 == 0 && $val % 5 ==0) {
            print_r("({$val})fizzbuzz\n");
        }
        if($val % 3 == 0) {
            print_r("({$val})fizz\n");
        }
        if($val % 5 == 0) {
            print_r("({$val})buzz\n");
        }
    }
}

fizzbuzz($range);
?>
