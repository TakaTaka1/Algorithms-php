<?php
// Pending


function notDividedBy5(&$n, &$arr=[]){
    $tmp =0;
    // function
    chkNum($n, $tmp);
    $n = $n - 5;
    $arr[] = $n;
    if($n == 0){
        return;
    }
    notDividedBy5($n,$arr);
    
}

function chkNum(&$n){
    
    if($n % 5 == 0){
        return $n;
    }
    if($n%10 >= 1 || $n % 10 < 5){
        $n++;    
    } 
    if($n%10 >= 6 || $n % 10 <= 9){
        
    }
    
}

$n = 14;
$arr =[];
print_r(notDividedBy5($n, $arr));
$getNum = count($arr)*4;
print_r($getNum);
?>

