<?php

$row = 6;
for($i = 1; $i <= $row; $i++){
    for($g = $row; $g > $i; $g--){
        echo " ";
    }
    for($j = 1; $j <= ($i*2)-1; $j++){ //$iと同じになるまで繰り返す
        echo "+";
    }
    echo "\n"; //改行
}
