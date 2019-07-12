<?php

$arr = [
    ['name'=>'taka', 'point'=>4],
    ['name'=>'miho', 'point'=>5],
    ['name'=>'avicii', 'point'=>3],
    ['name'=>'kenshiro', 'point'=>4],
    ['name'=>'toshiya', 'point'=>8]
];

$point_cmp = function($a,$b){
    return ($a['point'] < $b['point']) ? 1 : -1; // desc
    return ($a['point'] < $b['point']) ? -1 : 1; // asc
};

usort($arr, $point_cmp);

foreach($arr as $u){
    echo $u['name'].":".$u['point']."\n";
}
?>
