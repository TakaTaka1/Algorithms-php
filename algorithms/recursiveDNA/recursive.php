<?php 

// DNA

function dna($n, $joinWords=""){
   $words = ['A','C','G','T'];
   if($n==0){
       print_r($joinWords."\n");
       return;
   }
   
   foreach($words as $word){
       dna($n-1, $joinWords.$word);
   }
}

dna(1000000);


















?>
