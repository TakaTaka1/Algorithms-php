<?php
// Your code here!
// client 依頼者 
// adaptee 使われる側
// Targetがあり、そのターゲットを満たすためのクラスをadaptee
// adapteeのみでは足りない動作等を補うためにadapterが存在する


require_once('./Banner.php');

use Adapter\Banner;

interface IPrint {
    function printWeak();
    function printStrong();
}

class PrintBanner extends Banner implements IPrint {
    function __construct(String $string) {
        parent::__construct($string);
    }
    function printWeak() {
        $this->showWithParen();
    }
    function printStrong() {
        $this->showWithAster();
    }
}

$banner = new PrintBanner("hello");
$banner->printWeak();
$banner->printStrong();

?>

