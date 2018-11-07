<?php
// Aを入れる
// Bを入れる
// Cを入れる

// Cを取り出す

class stack{
    private $arr;
    public function push($data){
        $this->arr[] =  $data;
        return $this->arr;
    }
    
    public function pop(){
        
        return array_pop($this->arr);
    }

}

$tmp = new stack();
$tmp->push(10);
$tmp->push(100);
$tmp->push(101);

var_dump($tmp->pop());

?>

