<?php

    $arr =[1,2,5,8,11];
    function linearSearch($x, $arr){
        //$i =1;
        $result = -1;
        $n = count($arr);
        for($i=0; $i<$n; $i++){
            if($arr[$i] == $x) {
                $result = $i;
                $i = $n+1;
            }
        }
        return $result;
    }
    $result = linearSearch(1, $arr);
    if($result == -1){
        $result = "not Found"; 
    }else{
        $result = "You Found";
    }
    echo $result;
?>
