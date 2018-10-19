<?php

    function eu($a,$b){
        while($a<>$b){
            if($a > $b){
                $a= $a-$b;
            }else{
                $b= $b-$a;
            }
        }
        return $a;
    }

    print_r(eu(42,12));

?>
