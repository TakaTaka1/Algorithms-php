<?php
// アナグラム
// 与えられた２つの文字列がアナグラムかどうか判定して返す関数を作成してください。
// ただし、空白文字は無視するとします。文字列の比較では大文字小文字を区別しないこととします。
// 例) 
//  "anagrams" is an anagram of "ARS MAGNA"
    
    function removeSpace($word){
        $length = strlen($word);
        $tmp =[];
        $getWords="";
        for($i=0; $i<$length; $i++){
            if($word[$i] === " " || $word[$i] ==="　"){
                continue;
            }
            $tmp[] = $word[$i];
            $getWords .= $word[$i];
        }
        return $getWords;
    }

    function isAnagrams($a, $b){
        //空白を削除
        $space =[" ","　"];
        $removeSpaceA = str_replace($space, "", $a);
        $removeSpaceB = str_replace($space, "", $b);
        // $removeSpaceA = removeSpace($a);
        // $removeSpaceB = removeSpace($b);
        
        // upper to lower
        $tolowerA = mb_strtolower($removeSpaceA);
        $tolowerB = mb_strtolower($removeSpaceB);
        // 配列に変換する(空白を削除する)
        $splitA = str_split($tolowerA);
        $splitB = str_split($tolowerB);
        // アルファベット順に並び替える
        sort($splitA);
        sort($splitB);
        
        if (count($splitA) === count($splitB)) {
            foreach($splitA as $key => $value){
                if($value !== $splitB[$key]){
                    return false;
                }
            }
            return true;
        }
        return false;
    }
    //true
    var_dump(isAnagrams('anagrams', 'ARS MAGNA'));
    var_dump(isAnagrams('a nagrams', 'ARS MAGNA'));
    var_dump(isAnagrams('A nagram s', 'ARS MAGNA'));
    var_dump(isAnagrams('A nagram s', 'ARS MAGN A'));
    
    //false
    var_dump(isAnagrams('A  s', 'ARS MAGN A'));
    var_dump(isAnagrams('A', 'csga'));
    var_dump(isAnagrams('Anagramds', 'ARS MAGN A'));
?>
