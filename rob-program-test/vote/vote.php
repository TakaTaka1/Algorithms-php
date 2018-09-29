<?php

class Ranking {
   private $voteNum =[];
   private $setRank=[];
   private $votesCollection=[];
   private $rankCollection=[];
   
   public function vote($value){
       $this->voteNum[] = $value;
       self::sumVote($this->voteNum);
   } 
   
   private function sumVote($getValue){
       // 現状メソッドを使う
       $voteTimes = array_count_values($getValue);
       arsort($voteTimes);
       return $this->calcRank($voteTimes);
   }
   
   private function calcRank($voteTimes){
       $this->setRank =1;
       $tmpRanking =[];
       foreach(array_count_values($voteTimes) as $key => $value){
           for($i=0; $i<$value; $i++){
              $tmpRanking[] = $this->setRank;
           }
           $this->setRank += $value; 
       }

       // array_count_valuesを使わなかった場合
       // $counter =[];
       // foreach ($voteTimes as $key => $value){
       //      $counter[] = $value; 
       // }
       
       // $ranker=[];
       // foreach ($counter as $key => $val){
       //     if($key===0){
       //         $ranker[] = $this->rank;
       //     }else {
       //         $pre = $key -1;
               
       //         if($val === $counter[$pre]){
       //             $ranker[] = $this->rank; 
       //         }else {
       //             $this->rank = 1+$key;
       //             $ranker[] = $this->rank;
       //         }
       //     }
       // }
      
       $this->votesCollection = $voteTimes;
       $this->rankCollection = $tmpRanking;
   }
   
   public function getRank(){
       $count=0;
       foreach($this->votesCollection as $key => $value){
           echo "Rank {$this->rankingRank[$count]}: {$key}({$value})\n";
           $count++;
       }
   }
}



$ranking = new Ranking();

// 書く文字列を投票
$ranking->vote('abc');
$ranking->vote('abc');
$ranking->vote('abc');
$ranking->vote('abc');
$ranking->vote('def');
$ranking->vote('def');
$ranking->vote('ppp');
$ranking->vote('ppp');
$ranking->vote('ppp');
$ranking->vote('ccc');
$ranking->vote('ccc');
$ranking->vote('ccc');
$ranking->vote('ddd');
$ranking->vote('def');
$ranking->vote('abc');
$ranking->vote('def');
$ranking->vote('ppa');
$ranking->vote('ppa');
$ranking->vote('ppa');

// // ランキングを出力
$ranking->getRank();
// 出力
// Rank 1: abc(3)
// Rank 1: def(3)
// Rank 3: ppp(2)
// Rank 4: ppa(1)

?>
