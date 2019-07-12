<?php
require_once 'Autoloader.php';
use App\Index;
use App\Caller_a;

// 静的メソッド呼び出し(static)
$testRun = Index::run();
$testCall = Caller_a::call();


// インスタンス化
// $testRun = new Index();
// $testRun->run();

// $testCall = new Caller_a();
// $testCall->call();

?>