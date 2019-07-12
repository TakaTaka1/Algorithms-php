<?php
// nap sack!!
$max_weight = 19;
$items = [
    ['name'=>'gold','weight'=>9,'price'=>1000],
    ['name'=>'silver','weight'=>10,'price'=>100],
    ['name'=>'copper','weight'=>5,'price'=>10],
    ['name'=>'ruby','weight'=>4,'price'=>1500],
    ['name'=>'diamonds','weight'=>3,'price'=>10000],
];
$result =[];
$totalWeight =0;
$product = [];
figureOut(0,0,0,"");
asort($result, SORT_NUMERIC);
$result = array_reverse($result);
$max = 0;
echo "COUNT =  ".count($result). "\n";
foreach($result as $key => $value){
    if($max == 0) $max = $value;
    if($value < $max) break;
    echo "Product:$key ={$value}Dollar\n";
}
foreach($items as $key =>$item){
    
    timesYouCanPurchase($max_weight, $item['name'],$item['price'], $item['weight'], $product);
    echo "Name = {$item['name']}: Price = {$product[$item['name']]['price']}: Times = {$product[$item['name']]['count']}\n";
    
    
}
// Culculate how many time you can purchase each products
function timesYouCanPurchase($max_weight, $name ,$price, $weight, &$product){
    if(empty($product[$name])) {
        $product[$name]['price'] = 0; 
        $product[$name]['count'] = 0;
    }
    $max_weight -= $weight;
    if($max_weight <= 0){
        return;
    }
    $product[$name]['price'] += $price;
    $product[$name]['count'] += 1;    
    timesYouCanPurchase($max_weight, $name ,$price, $weight, $product);
}
// Figure out , using Brute-force-search or Exhaustive search
function figureOut($num, $weight, $price, $knapsack) {
    global $items, $result, $max_weight, $totalWeight, $product;
    if(count($items) <= $num) {
        $result[$knapsack] = $price;
        return;
    }
    $hasItem = $items[$num];
    figureOut($num + 1, $weight, $price, $knapsack);
    $weight2 = $weight + $hasItem['weight'];
    $price2 = $price + $hasItem['price'];
    if($weight2 > $max_weight){
        $result[$knapsack] = $price;
        return;
    }
    $knapsack .= $hasItem['name']."/";
    figureOut($num + 1, $weight2, $price2, $knapsack);
}
?>

