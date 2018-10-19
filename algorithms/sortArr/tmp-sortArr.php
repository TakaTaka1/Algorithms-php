<?php
// Your code here!
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

echo "== 並び替え前 =======================\n";
foreach ($persons as $person) {
    $name = $person['name'];
    $age = $person['age'];
    $classa = $person['class'];
    print_r("name:{$name},age:{$age},class:{$classa}\n");
}

$age_list = [];
$class_list = [];
foreach($persons as $person){
    $age_list[] = $person['age'];
    $class_list[] = $person['class'];
}

array_multisort($class_list,$age_list,SORT_DESC,$persons);

echo "== 並び替え後 =======================\n";
foreach ($persons as $person) {
    $name = $person['name'];
    $age = $person['age'];
    $classa = $person['class'];
    print_r("name:{$name},age:{$age},class:{$classa}\n");
}

?>
