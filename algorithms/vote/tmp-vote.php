<?php 
class Ranking {
    private $items =[];
    function vote($item){
        if(array_key_exists($item, $this->items)){
            $this->items[$item]++;
        } else {
            $this->items[$item] = 1;
        }
    }
    
    function getRank(){
        foreach ($this->items as $item => $count){
            $tmp_items[] = [
                'count'=>$count,
                'item' => $item
            ];
        }
        for($i=0; $i<count($tmp_items)-1; $i++){
            if($tmp_items[$i]['count'] < $tmp_items[$i+1]['count']){
                $tmp = $tmp_items[$i+1];
                $tmp_items[$i+1] = $tmp_items[$i];
                $tmp_items[$i] = $tmp;
            }
        }
        
        for($i=0; $i<count($tmp_items); $i++){
            $rank = $i+1;
            for($j=0; $j<count($tmp_items); $j++){
                if($tmp_items[$i]['count'] === $tmp_items[$j]['count']) {
                    $rank = $j+1;   
                }
            }
            $item = $tmp_items[$i]['item'];
            $count = $tmp_items[$i]['count'];
            echo "Rank {$rank}: {$item}([$count])\n";
        }
    }
}



$ranking = new Ranking();

// 書く文字列を投票
$ranking->vote('abc');
$ranking->vote('abc');
// $ranking->vote('abc');
$ranking->vote('abc');
$ranking->vote('def');
$ranking->vote('def');
$ranking->vote('ppp');
$ranking->vote('ppp');
//$ranking->vote('ppp');
//$ranking->vote('def');
// $ranking->vote('abc');
// $ranking->vote('def');
// $ranking->vote('ppa');

// // ランキングを出力
$ranking->getRank();
// 出力
// Rank 1: abc(3)
// Rank 1: def(3)
// Rank 3: ppp(2)
// Rank 4: ppa(1)
