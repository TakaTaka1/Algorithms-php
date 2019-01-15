<?php
// hash
$arrayD = [12,25,36,20,30,8,42];
$arrayH = range(0,10);
function hash1($arr){
    $retVal =[];
    foreach($arr as $key => $val){
        $retVal[] = $val%11;
    }
    return $retVal;
}
foreach($arrayH as $key=>$val){
    $arrayH[$key] = 0;
}
for($i=0; $i<count($arrayD); $i++){
    $k = $arrayD[$i]%11;
    if($arrayH[$k] != 0){
        while($arrayH[$k] != 0){
            $k = ($k+1)%11;
        }
        $arrayH[$k] = $arrayD[$i];
    }else{
        $arrayH[$k] = $arrayD[$i];    
    }
}
print_r($arrayH);
?>

