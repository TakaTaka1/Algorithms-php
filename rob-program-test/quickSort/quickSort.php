<?php 

function quick($start, $end, &$a){
    
    $pivot = $a[intval($start+$end)/2];
    $left=$start;
    $right=$end;
    while(1){
        while($a[$left] < $pivot){
            $left++;
        }
        while($a[$right] > $pivot){
            $right--;
        }
        if($left >= $right){
            break;
        }
        $tmp = $a[$left];
        $a[$left] = $a[$right];
        $a[$right]= $tmp;
        $left++;
        $right--;
    }
    
    if($start < $left-1){
        quick($start, $left-1, $a);
    }
    
    if($right+1 < $end){
        quick($right+1, $end, $a);
    }
    
}

$a = [5,2,4,6,3,7,1];
quick(0, count($a)-1,$a);
print_r($a);
