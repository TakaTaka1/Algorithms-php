<?php

function primeNum($n){
    $lists=[];
    for($i=2; $i<=$n; $i++){
        $lists[] = $i;
    }

    // $Listの先頭の値を取得していく
    $primeLists =[];
    while($val=array_shift($lists)){
        $primeLists[] = $val;
        foreach($lists as $key => $value){
            if($value%$val === 0){
                //篩に掛ける
                unset($lists[$key]);
            }
        }
    }
    return $primeLists;
}
