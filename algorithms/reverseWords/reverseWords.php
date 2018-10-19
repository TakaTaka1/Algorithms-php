<?php

function reverse($str) {
    $rtn = '';
    for($i=mb_strlen($str)-1; $i>=0; $i--){
        $rtn .= mb_substr($str,$i,1);
    }
    return $rtn;
}

echo reverse("Hello World!");
echo "\n";
echo reverse("こんにちは");

?>
