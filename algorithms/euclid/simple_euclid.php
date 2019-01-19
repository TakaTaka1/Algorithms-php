<?php
// euclid

function euclid ($a, $b){
    while($a != $b){
        if($a > $b){
            $a = $a - $b;
        }
        if($a < $b){
            $b = $b - $a;
        }
    }
    $gcf = $a;
    // greatest common factor
    return $gcf;
}
print_r(euclid(16,8));




?>
