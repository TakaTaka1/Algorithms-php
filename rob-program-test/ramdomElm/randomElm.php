<?php
// a~z,A~Z,0~9からなる長さxのランダムな文字列を生成する関数を作成してください。
// ただし、ランダム文字列の先頭は0~9ではダメ。
// 拡張１：第２引数にオプション定数で `NO_DUPLICATION = 001` を設定されると、重複しない文字からなるランダム文字列を返すように修正。ただし、大文字小文字は同じ文字としてカウントしないこととする。

// 拡張２：第２引数にオプション定数で`AT_LEAST_ALLTYPE = 010`を設定されると、小文字アルファベット、大文字アルファベット、数字それぞれの文字を少なくとも１つは含むランダム文字列を返すように修正する。

const NO_DUPLICATION = 0b001;
const AT_LEAST_ALLTYPE = 0b010;

function randString($length,$opt){
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    // 先頭文字をalphabetに
    $subAlphabet = substr($chars,0, -10);
    $arrAlphabet = str_split($subAlphabet);
    $startWords = $arrAlphabet[mt_rand(0,count($arrAlphabet)-1)];
    
    // 先頭文字と連結させる配列    
    $charsLength = strlen($chars);
    $arr = str_split($chars);
    $noDup =[];
    $allType =$startWords;
    $words="";
    for($i=0; $i<$length; $i++){
        $noDup[]= $arr[mt_rand(0, count($arr)-1)];
        if($i === $length-1){
            $tmp=array_unique($noDup);
            //print_r(count($tmp)."\n");
            if(count($tmp) < $length){
                $i=-1;
                $noDup =[];
                // foreach($tmp as $value){
                //     $words .= $value;
                // }
                // print_r($words."\n");
                // for($j=0; $j<$length-count($tmp); $j++){
                //   if(strpos($words, $arr[mt_rand(0, strlen($chars)-1)]) === false){
                //       $tmp[] = $arr[mt_rand(0, strlen($chars)-1)];
                //   }
                //   $j=-1;
                // }
            }
        }
    }
    
    
    $returnNoDup ="";
    foreach($tmp as $value){
        $returnNoDup .= $value;
        
    }
    print_r(strlen($returnNoDup)."=>".$returnNoDup);
    
    $digitFlag =false;
    $lowerFlag =false;
    $upperFlag =false;
    for($i=0; $i<$length-1; $i++){
        $allType .= $arr[mt_rand(0, count($arr)-1)];
        if($i+1 == $length-1){
            for($j=0; $j<strlen($allType); $j++){
                if(ctype_digit($allType[$j])){
                    $digitFlag=true;
                }
                if(ctype_lower($allType[$j])){
                    $lowerFlag=true;
                }
                if(ctype_upper($allType[$j])){
                    $upperFlag=true;
                }            
            }
            if(!$digitFlag || !$lowerFlag || !$upperFlag){
                $digitFlag =false;
                $lowerFlag =false;
                $upperFlag =false;

                $i=-1;
                $count=0;
                $allType = "";
                $allType .= $startWords;
            }
        }
    }    

    // 大文字,小文字,数字が必ず含む文字列
    if($opt & NO_DUPLICATION){
        
        //print_r($noDup."\n");
    }
    if($opt & AT_LEAST_ALLTYPE){
        //print_r("AT_LEAST_ALLTYPE \n");
        //print_r($allType."\n");
    }
}

print_r(randString(20,NO_DUPLICATION | AT_LEAST_ALLTYPE));


//var_dump(strpos('XGe', 'G'));

?>
