<?php

print_r(primeRange(100));

function primeRange($n, $primeList=[]){
    for($i=2; $i<$n; $i++){
        if($i === 2) {
            $primeList[]= $i;
        }
        for($j=2; $j<$n; $j++){
            if($i%$j === 0){
                continue;
            }else{
                $primeList[]=$i;
            }
            
        }
    }
    $showPrime =[];
    for($i=0; $i<count($primeList); $i++){
        $cnt=0;
        if($n%$primeList[$i] === 0){
           while($n%$primeList[$i] === 0){
               $tmp = $n/$primeList[$i];
               $cnt++;
               $n = $tmp;
           }
           $showPrime[] = $primeList[$i]."*".$cnt;
        }
    }
    return $showPrime;
}
