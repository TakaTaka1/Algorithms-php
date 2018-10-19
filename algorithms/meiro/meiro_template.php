<?php

//入り口を探す
//入り口をpivot=(0,1) として格納
//進める道があるか探す。
//進める道がある場合、現在地を'+'で埋めてpivotを更新。
//進める道がなくなった場合、それまでの経路を捨てる。

function meiro_toku($meiro_arr,$x=0,$y=0){
  //$y==0 の場合、入り口を探して、return meiro_toku(...);
  if($y==0 && $x==0){
    return meiro_toku($meiro_arr,array_search(' ',$meiro_arr[0]),$y);
  }

  //$y==count($meiro_arr)-1 の場合、return $meiro_arr;
  if($y==count($meiro_arr)-1){
    $meiro_arr[$y][$x] = '+';
    return $meiro_arr;
  }
  //上下左右の４ケースで、進める道があるかチェック
  if(isset($meiro_arr[$y-1][$x]) && $meiro_arr[$y-1][$x]==' '){ // 上
    //進める道がある場合、現在地を'+'で埋めて、meiro_toku(...)の結果を取得
    $meiro_arr[$y][$x] = '+';
    $result = meiro_toku($meiro_arr,$x,$y-1);
    // 結果がnullなら、上下左右で別の進める道がないか、調べて同じことをする。
    if(!is_null($result)){
      //結果がnull以外の場合、進める道がさらにあるか return meiro_toku(...)
      return $result;
    }
  }
  if(isset($meiro_arr[$y+1][$x]) && $meiro_arr[$y+1][$x]==' '){ // 下
    $meiro_arr[$y][$x] = '+';
    $result =  meiro_toku($meiro_arr,$x,$y+1);
    if(!is_null($result)){
      return $result;
    }
  }
  if(isset($meiro_arr[$y][$x-1]) && $meiro_arr[$y][$x-1]==' '){ // 左
    $meiro_arr[$y][$x] = '+';
    $result =   meiro_toku($meiro_arr,$x-1,$y);
    if(!is_null($result)){
      return $result;
    }
  }
  if(isset($meiro_arr[$y][$x+1]) && $meiro_arr[$y][$x+1]==' '){ // 右
    $meiro_arr[$y][$x] = '+';
    $result =   meiro_toku($meiro_arr,$x+1,$y);
    if(!is_null($result)){
      return $result;
    }
  }
  // 進める道がない場合、return null
  return null;
}

$meiro_str = <<<EOT
# ########
# ## ### #
#    ##  #
#### ## ##
####    ##
# ## #####
#    #   #
# #### # #
#      # #
## ## ## #
######## #
EOT;

$meiro_arr = array_map(function($x){return str_split($x);},explode("\n",$meiro_str));
$result = meiro_toku($meiro_arr);
foreach ($result as $x) {
  print_r(implode($x)."\n");
}

