<?php
// $_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
// TODO refactoring
// Failed Test Case.. don't know why

while(!feof(STDIN)){
  $line[] = trim(fgets(STDIN));
}

$count =0;
$fetchVal = [];
while($count<$line[0]){
  $fetchVal[] = $line[$count+1];
  ++$count;
}
$splitFirst = explode(" ", $fetchVal[0]);
$wordC = "";

$tmp = $splitFirst;

array_pop($tmp);

$tmpArr = [];
$count =0;
$saveParams =[];
foreach($tmp as $key => $val){
  $saveParams[] = $val;
  if(strlen($saveParams[$count]) < $splitFirst[2]){
    $wordC .= $saveParams[$count];
  }
  if($count == count($tmp)-1){
    $saveParams[] = $wordC;
  }
  $count++;
}

$saveCount =0;
while(1){
  if(strlen(end($saveParams)) < $splitFirst[2]){
    $saveParams[] = prev($saveParams).end($saveParams);
  } else {
    break;
  }
}
// pending
print_r(end($saveParams)[$splitFirst[2]-1]."\n");
print_r($line[2][$splitFirst[2]-1]);

?>


