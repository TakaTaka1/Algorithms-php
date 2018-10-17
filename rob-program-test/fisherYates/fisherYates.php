<?php
$arr =[1,2,3,4,5];
function fisherYates(&$a){
    for($i=count($a)-1; $i>=1; $i--){
        $r = mt_rand(0, $i);
        // $tmp = $a[$r];
        // $a[$r] = $a[$i];
        // $a[$i] = $tmp;
        list($a[$i], $a[$r]) = [$a[$r], $a[$i]];
    }
    return $a;
}
print_r(fisherYates($arr));
?>

