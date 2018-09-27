<?php
// 配列に指定された位置に要素を挿入する関数を作成してください
// ['A','B','C']に'D'をindex:1に挿入 => ['A','D','B','C']


// 指定の添え字以上をtmpとして持つ
// 連想配列が混じった配列はkeyが無いものは昇順でindexが割り振られる

$arr =['A'=>'a','B','c'=>'C','D'];
$num=4;

//exit;
function addArrElm($inputArr=[], $num, $addWord=""){
    $count=0;
    $tmpArr =[];
    if(is_numeric($num) && isset($num) && $num <= count($inputArr)){
        foreach ($inputArr as $key => $value){
            if(!is_array($addWord) && ($count===$num || count($inputArr) === $num)){
                $tmpArr = array_splice($inputArr, $num);
                $inputArr[] = $addWord;
                //print_r($inputArr);
                
                $inputArr = array_merge($inputArr, $tmpArr);
                // $inputArr[] = $tmpArr[0];
            }
            if(is_array($addWord) && ($count===$num || count($inputArr) === $num)){
                $tmpArr = array_splice($inputArr, $num);
                foreach($addWord as $key => $value){
                    $inputArr[$key] = $value;    
                }
                $inputArr = array_merge($inputArr, $tmpArr);
            }
            $count++;
        }
    }
    return $inputArr;
}

print_r(addArrElm($arr, $num, ['charlie puth'=>'see you again','papa roach'=>'Last Resort']));

// function addArrElm($arr=[], $num, $addWord=""){
//     if(is_numeric($num) && isset($num)){
//         foreach ($arr as $key => $value){
//             if($num <= $key){
//                 $tmp[] = $value;
//             }elseif ($num === count($arr)){
//                 $arr[] = $addWord;
//                 return $arr;
//             }
//         }
//         $arr[$num] = $addWord;
//         for($i=0; $i<count($tmp); $i++){
//             $arr[$num+1+$i] = $tmp[$i];    
//         }
//     }
//     return $arr;
// }

?>
