<?php
// trait

trait TestA{
    function testA(int &$sum){
        $sum++;
        return $sum;
    }
}

trait TestB{
    function testB(int &$sum){
        $sum++;
        return $sum;
    }
}

class TestC{
    use TestA,TestB;
    function test_C(int &$sum){
        $sum++;
        return $sum;
    }
}
$sum = 1;
$tmp = new TestC();
$tmp->testA($sum);
$tmp->testB($sum);
echo $tmp->test_C($sum);

?>
