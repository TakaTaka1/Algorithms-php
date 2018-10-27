<?php
# n(1) = 1
# n(2) = 1
# n(3) = 2 = n(2) + n(1) = 1 + 1
# n(4) = 3 = n(3) + n(2) = 2 + 1
# n(5) = 5 = n(4) + n(3) = 3 + 2
# n(6) = 8 = n(5) + n(4) = 5 + 3
$memo =[];
function fib($n){
    global $memo;
    if ($n <= 1){
        return 1;
    }
    if ($n === 2){
        return 1;
    }
    if(isset($memo[$n])){
        return $memo[$n];
    }
    return $memo[$n] =fib($n-1) + fib($n-2);
}

print_r(fib(5));

?>

