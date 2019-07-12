<?php 

    $arr = [1,3,4,5,8,11];

    function linearSearch($x, $arr, &$i){
        $count = count($arr);

        if($x == $arr[$i]){
            echo $i;
            return;
        }else{
            $i++;
        }
        linearSearch($x, $arr, $i);
    }
    $i = 0;
    print_r(linearSearch(5, $arr, $i));
?>
