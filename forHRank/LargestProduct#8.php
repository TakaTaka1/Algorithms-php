<?php
// get file
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
$nums=[];
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n[],$k[]);
    fscanf($handle,"%s",$nums[]);
}

foreach($nums as $key => $val){
    $greatest = 0;
    for($i=0; $i<strlen($val); $i++){
        $data = substr($val, $i, $k[$key]);
        if(strlen($data) == $k[$key]){
            $p = 1;
            for($j=0; $j<$k[$key]; $j++){
                $p *=$data[$j];
            }
            if($p > $greatest){
                $greatest = $p;
            }
        }
    }
    echo $greatest."\n";
}

?>
