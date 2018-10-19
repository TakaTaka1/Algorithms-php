<?php 
//(例) 1~4までの最小の倍数は？ -> 12

const target=4;
$curval = target;
    
while(true){
    $isOk = true;
    for($i=2; $i<=target; $i++){
        if($curval%$i !=0) {
            $isOk = false;
            break;
        }
    }
    if($isOk) break;
    $curval += target;
}

print_r($curval);
