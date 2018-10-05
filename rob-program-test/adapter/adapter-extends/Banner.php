<?php

namespace Adapter;

class Banner{
    private $string;
    function __construct(String $string){
        $this->string = $string;
    }
    function showWithParen(){
        print_r("({$this->string})\n");
    }
    function showWithAster(){
        print_r("*{$this->string}*\n");
    }
}
?>
