<?php
function primeRange($n, $primeList=[]){
    for($i=2; $i<$n; $i++){
        if($i === 2) {
            $primeList[]= $i;
        }
        if($i%2 !==0){
            $primeCnt =0;
            for($j=$i; $j>=1; $j--){
                if($i%$j ===0){
                    $primeCnt++;
                }
            }
            if($primeCnt === 2){
                $primeList[] = $i;
            }
        }
    }
    $showPrime =[];
    for($i=0; $i<count($primeList); $i++){
        $cnt=0;
        if($n%$primeList[$i] === 0){
           while($n%$primeList[$i] ===0){
               $tmp = $n/$primeList[$i];
               $cnt++;
               $n = $tmp;
           }
           $showPrime[] = $primeList[$i]."*".$cnt;
        }
    }
    return $showPrime;
}
print_r(primeRange(60));
?>

