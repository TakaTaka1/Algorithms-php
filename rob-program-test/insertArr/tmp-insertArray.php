<?php
// 配列に指定された位置に要素を挿入する関数を作成してください
// ['A','B','C']に'D'をindex:1に挿入 => ['A','D','B','C']

function insert(&$arr, $idx, $item) {
    $rtn =[];
    $count =0;
    if(count($arr) == $idx){
        $arr[] = $item;
    } else {
        foreach ($arr as $key => $val){
            if($count === $idx) {
                $rtn[] = $item;
            }
            if(array_key_exists($key, $rtn)){
                $rtn[] = $val;
            }else{
                $rtn[$key] = $val;
            }
            $count++;
        }
        print_r($arr);
        foreach($arr as $key => $val) unset($arr[$key]);
        print_r($rtn);
        exit;
        foreach($rtn as $key => $val) $arr[$key] = $val;
    }
}

    $arr =[
        'a'=>'A',
         5 =>'B',
        't'=>'Z',
        'c'=>'C',
         8=> 'B',
    ];
    
insert($arr, 4, 'x');
print_r($arr);

?>

