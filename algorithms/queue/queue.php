<?php
// FIFO Queue Enqueue Dequeue
class Queue{
    private $list = [];
    
    public function enqueue($v){
        $this->list[] = $v;
    }
    
    public function dequeue(){
        return array_shift($this->list);
    }
    
    public function count(){
        return count($this->list);
    }
}

$q = new Queue();
$q->enqueue(100);
$q->enqueue(101);
$q->enqueue(102);

while($q->count() !=null){
    print_r($q->dequeue());
}

?>

