<?php 
//　必要条件
// sort済み配列を作成する arr (昇順)
// x -> 探したい数 
// left -> 0
// right -> arrの最後の要素
// mid -> left + right (端数は切り捨てる)

$arr = [1,2,3,4,5,6,7,10,11];

function binarySearch($arr, $x){
	$right = count($arr)-1;
	$left = 0;	
	while($left <= $right){
		$mid = (int)(($left + $right)/2);
		if($arr[$mid] == $x){
			return $mid;
		}		
		if($arr[$mid] > $x){
			$right = $mid - 1;
		}else{
			$left = $mid + 1;
		}
	}
	return "not found";
}
$x = 1;
var_dump(binarySearch($arr,$x));

?>