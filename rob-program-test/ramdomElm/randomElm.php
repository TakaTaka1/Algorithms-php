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
    $arr = str_split($chars);
    $setStartWords =$startWords;

    if(($opt & AT_LEAST_ALLTYPE | NO_DUPLICATION)){
        print_r("AT_LEAST_ALLTYPE | NO_DUPLICATION\n");
        $digitFlag =false;
        $lowerFlag =false;
        $upperFlag =false;
        for($i=0; $i<$length-1; $i++){
            $ranNum = mt_rand(0, count($arr)-1);
            if(strpos($setStartWords, $arr[$ranNum]) === false){
                $setStartWords .= $arr[$ranNum];
            }
            if($i === $length-2){
                if(strlen($setStartWords) < $length){
                    $i=-1;
                    $setStartWords ="";
                    $setStartWords = $startWords;
                }
                for($j=0; $j<strlen($setStartWords); $j++){
                    if(ctype_digit($setStartWords[$j])){
                        $digitFlag=true;
                    }
                    if(ctype_lower($setStartWords[$j])){
                        $lowerFlag=true;
                    }
                    if(ctype_upper($setStartWords[$j])){
                        $upperFlag=true;
                    }            
                }
                if(!$digitFlag || !$lowerFlag || !$upperFlag){
                    $digitFlag =false;
                    $lowerFlag =false;
                    $upperFlag =false;
    
                    $i=-1;
                    $setStartWords = "";
                    $setStartWords .= $startWords;
                }
            }
        }            
        return $setStartWords;
    }

    // 重複無し文字列生成
    if($opt & NO_DUPLICATION){
        print_r('NO_DUPLICATION');
        for($i=0; $i<$length-1; $i++){
            $ranNum = mt_rand(0, count($arr)-1);
            if(strpos($setStartWords, $arr[$ranNum]) === false){
                $setStartWords .= $arr[$ranNum];
            }
            if($i === $length-2){
                if(strlen($setStartWords) < $length){
                    $i=-1;
                    $setStartWords ="";
                    $setStartWords = $startWords;
                }
            }
        }
        return $setStartWords;
    }
    
    // 大文字,小文字,数字が必ず含む文字列 
    if($opt & AT_LEAST_ALLTYPE){
        print_r('AT_LEAST_ALLTYPE');
        $digitFlag =false;
        $lowerFlag =false;
        $upperFlag =false;
        for($i=0; $i<$length-1; $i++){
            $setStartWords .= $arr[mt_rand(0, count($arr)-1)];
            if($i === $length-2){
                for($j=0; $j<strlen($setStartWords); $j++){
                    if(ctype_digit($setStartWords[$j])){
                        $digitFlag=true;
                    }
                    if(ctype_lower($setStartWords[$j])){
                        $lowerFlag=true;
                    }
                    if(ctype_upper($setStartWords[$j])){
                        $upperFlag=true;
                    }            
                }
                if(!$digitFlag || !$lowerFlag || !$upperFlag){
                    $digitFlag =false;
                    $lowerFlag =false;
                    $upperFlag =false;
    
                    $i=-1;
                    $count=0;
                    $setStartWords = "";
                    $setStartWords .= $startWords;
                }
            }
        }            
        return $setStartWords;
    }
}

print_r(randString(10, NO_DUPLICATION | AT_LEAST_ALLTYPE)."\n");

// print_r(AT_LEAST_ALLTYPE & NO_DUPLICATION."\n");
// print_r(AT_LEAST_ALLTYPE | NO_DUPLICATION."\n");

?>
