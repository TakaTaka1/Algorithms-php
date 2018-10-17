<?php 


function primeNum($n){

    // To pick up in one of $n are primeNum or not 
    $primeList[] = 2;
    $tmp = 0;
    for($i=2; $i<$n; $i++){
    	if($i%$primeList[0] === 0){
    		continue;
    	}
    	$primeList[] = $i;
    }
    //pending
}



