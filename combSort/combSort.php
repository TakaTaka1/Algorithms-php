<?php
$arr = [10,9,3,4,1,5,68,2];

// 要素の先頭と最後を比較
// 先頭の要素をインクリメント
// 最後の要素をデクリメントするようにロジックを考える

function comSort(&$arr){
    $gap = $count = count($arr);
    print_r(floor($gap/1.25));
    while($gap > 1){
        if($gap > 1){
            $gap = $gap-1;
        }
        $i =0;
	while($i + $gap < $count){ 
            if($arr[$i] > $arr[$i + $gap]){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$i + $gap];
                $arr[$i + $gap] = $tmp;
                //$swap = true;
            }
            $i++;
        }
    }
    return $arr;
}

print_r(comSort($arr));

?>
