<?php
/*
Fibonacciの実装

# n(1) = 1
# n(2) = 1
# n(3) = 2 = n(2) + n(1) = 1 + 1
# n(4) = 3 = n(3) + n(2) = 2 + 1
# n(5) = 5 = n(4) + n(3) = 3 + 2
# n(5) = 8 = n(5) + n(4) = 5 + 3

*/

function fib($n){
    if ($n === 1){
        return 1;
    }
    if ($n === 2){
        return 1;
    }
    //n = 3の場合は2が返る -> n(2) + n(1) -> 2
    return fib($n-1) + fib($n-2);
}

for ($i=1; $i<=10; $i++) {
    print_r(fib($i)."\n");
}




// palindrome
// Palindrome
// 以下のTODO部分を実装し、"deleveled"のように、前から読んでも、後ろから読んでも同じになる文字列の場合、true
// そうでない場合Falseを返すような関数を実装してください。

class Palindrome
{
    public static function isPalindrome($word)
    {
        // TODO
        // 1.文字列を確認し最初の文字と最後の文字を確認する
        // 2.最初の文字番目+nと最後の文字番目-nを比較していく
        // 3.n番目の文字が違う場合はその文字列は、Palindromeでないと判断する
        // 4.n番目の文字が一度も違わない場合はその文字列は、Palindromeと判断する
        
        // 文字列を配列に
        $length = strlen($word);
        // 配列の真ん中の要素を算出する
        $middle = floor($length/2);
        
        // $lengthが奇数なら、$middleを使用する 偶数なら使用しない
        
        for($i=0; $i<$middle; $i++){
            if($word[$i] !== $word[($length-1) - $i]){
                return false;
            } 
        }
        return true;
    }
}

// テストケース
// 偶数 奇数
var_dump(Palindrome::isPalindrome('deleveled')); // true
var_dump(Palindrome::isPalindrome('ABBA')); // true

var_dump(Palindrome::isPalindrome('ABC')); // false
var_dump(Palindrome::isPalindrome('ABCA')); // false

// 文字が１文字の時
var_dump(Palindrome::isPalindrome('d')); //true


//var_dump(Palindrome::isPalindrome('deleveled')); // true
//echo Palindrome::isPalindrome('deleveled'); // true
