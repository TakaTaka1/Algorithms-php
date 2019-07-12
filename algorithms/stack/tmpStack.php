<?php
// Stack LIFO PUSH POP

class Stack{
    private $stack =[];
    
    public function push($v){
        $this->stack[] = $v;
    }
    
    public function pop(){
        return array_pop($this->stack);
    }
    
    public function count(){
        return $this->stack;
    }
}

$stack = new Stack();
$stack->push(100);
$stack->push(101);
$stack->push(102);

while($v = $stack->pop()){
    print_r("{$v}\n");
}
?>

