<?php


// 指定長さ分の文字列の取得
// A. 生成された文字列のいづれも重複させてはいけない(大文字と小文字はOK)
// B. 大文字,小文字,数値がそれぞれ含んだ文字列の生成
// C. 先頭の文字は、数値となってはいけない


// 重複確認処理(指定長さ取得 => ループ処理)
// 1. 数値以外の文字列を取得 -> substr($start, $target, $length);
// 2. 1で取得した文字列からランダムに1文字を取得 -> 
// 3. 数値以外の文字列が先頭 .= 全ての文字列からランダムに1文字 -> substr($start, $target, $length);
// 4. 数値以外を格納している変数とランダムに1文字取得して来た文字列の重複チェック -> strpos($target, $chkVar);
// 5. 重複していなければ追加、していれば再度ループを回して一度も重複しなければ値を返す

// 全文字種が含まれている場合
// 1. 全文字種毎にflagをつける
// 2. flagが全てtrue or 任意の値になれば全文字種が含まれていると判定できる
// 3. flagが全てtrueになるまでループを回して、文字列を生成し続けないといけない -> while or forかつ、ある条件が満たされるまでループを回し続ける必要がある
// 4. 
// 5. 


const ALL_CHARS = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
const NO_DUPLICATION = 0b001;
const AT_LEAST_ALLTYPE = 0b010;

function randString($length, $opt=0b000) {
    $all_chars = str_split(ALL_CHARS);
    
    while(1) {
        // 数値以外の文字列取得
        $rtn = substr(ALL_CHARS, rand(10,count($all_chars)-1),1);
        for($i=0; $i<$length-1; $i++){
            $tmp_char = substr(ALL_CHARS, rand(0,count($all_chars)-1),1);
            if($opt & NO_DUPLICATION && strpos($rtn, $tmp_char) !== false){
                $i--;
                continue;
            }
            $rtn .= $tmp_char;
        }
        if(($opt & AT_LEAST_ALLTYPE) && $length>2){
            $flag = 0b000;
            for($i=0; $i<strlen($rtn); $i++){
                if(ctype_digit($rtn[$i])){
                    $flag |= 0b001;
                }
                if(ctype_lower($rtn[$i])){
                    $flag |= 0b010;
                }
                if(ctype_upper($rtn[$i])){
                    $flag |= 0b111;
                }                
            }
            if($flag === 0b111){
                break;
            }
        }else {
            break;
        }
    }
    return $rtn;
}

$result = randString(10, AT_LEAST_ALLTYPE);

for($i=0; $i<strlen($result); $i++){
    if(substr_count($result, $result[$i]) > 1){
        print_r("重複あり\n");
    }
}

print_r($result);

?>
