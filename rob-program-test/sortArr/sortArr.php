<?php
// $persons配列の要素をクラスを昇順、年齢を降順になるよう並べ替えてください。
$persons = [
  [
    'name' => 'John',
    'age' => 12,
    'class' => 1
  ],
  [
    'name' => 'Smith',
    'age' => 29,
    'class' => 2
  ],
  [
    'name' => 'George',
    'age' => 20,
    'class' => 3
  ],
  [
    'name' => 'Rebecca',
    'age' => 20,
    'class' => 2
  ],
  [
    'name' => 'Alexander',
    'age' => 25,
    'class' => 3
  ],
  [
    'name' => 'Tom',
    'age' => 23,
    'class' => 1
  ],
  [
    'name' => 'Adam',
    'age' => 21,
    'class' => 3
  ],
  [
    'name' => 'John Jr',
    'age' => 6,
    'class' => 3
  ],
];


for($j=0; $j<count($persons)-1; $j++) {
    for($i=0; $i<count($persons)-$j-1; $i++) {
        // ageの比較(降順)
        if($persons[$i]['age'] < $persons[$i+1]['age']){
            swapArr($persons,$i,$i+1);
        }
        // classの比較(昇順)
        if($persons[$i]['class'] > $persons[$i+1]['class']){
            swapArr($persons,$i,$i+1);
        }
    }
}


function swapArr(&$arr, $indexA, $indexB) {
    $tmp = $arr[$indexA];
    $arr[$indexA] = $arr[$indexB];
    $arr[$indexB] = $tmp;
}

print_r($persons);

?>
