<?php

// array_count_values
$arr =['aaa','aaa','aaa','bbb','bbb'];
$tmp =[];
$prev =-1;
$count =1;
foreach($arr as $key => $val){
    if($key===0){
        $tmp[$val] = $count;
    } else {
        if($arr[$key] === $arr[$key+$prev]){
            $tmp[$val] += $count;
        }else{
            $tmp[$val] = $count;
        }
    }
}
 print_r($tmp);

?>

