<?php
// Your code here!
# 西暦2000年〜2200年の間の閏年の一覧を出力してください。
# 閏年になる条件
# 1. 西暦年が4で割り切れる年は閏年。
# 2. ただし、西暦年が100で割り切れる年は平年。
# 3. ただし、西暦年が400で割り切れる年は閏年。

# 出力結果
# 2000
# 2004
# 2008
# 2012
# …
# 2188
# 2192
# 2196
$years = range(2000, 2200);
$urudoshiList =[];
$heinen =[];
// foreach ($years as $key => $value) {
//     if ($value % 4 === 0 && $value % 400 === 0) {
//         $urudoshiList[] = $value;
//     }
//     if ($value % 4 === 0 && $value % 400 !== 0) {
//         $urudoshiList[] = $value;
//     }
// }
// foreach ($urudoshiList as $key => $value) {
    
//     if ($value % 100 === 0) {
//         $heinen[] = $value;
//     }
// }

// 2004  
// 2100 
foreach ($years as $key => $value) {
    // if($value % 4 === 0){
    //     $urudoshiList[$key] = $value;
    // }
    // if ($value % 100 === 0){
    //     if ($value % 4 === 0 && $value % 400 === 0){
    //         continue;
    //     }
    //     $heinen[] = $urudoshiList[$key];
    // }
    // if ($value % 400 === 0){
    //     $urudoshiList[$key] = $value;
    // }
    
    if($value % 4 == 0){
        if($value % 100 == 0 && $value % 400 !== 0){
            continue;
        }
        print($value . "\n");
    }
}

// print_r(array_diff($urudoshiList, $heinen));
?>
