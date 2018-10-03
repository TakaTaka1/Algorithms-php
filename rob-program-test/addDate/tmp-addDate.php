<?php
// 時刻クラスMyTimeを実装し、時分秒を追加できるメンバ関数を実装してください。
class MyTime{
  public $hour;
  public $minute;
  public $second;
  //const FORMINSEC = 60;
  //const FORHOUR = 24;

  function __construct($hour=0,$minute=0,$second=0){
    $this->hour = $hour;
    $this->minute = $minute;
    $this->second = $second;
  }

  public function addHour($addHour){
    //TODO
    // 剰余にすると
    $this->hour = ($this->hour + $addHour) % 24;
  }

  public function addMinute($addMinute, $opt=0){
    // TODO
    $this->addHour(floor($this->minute + $addMinute)/60);
    $this->minute = ($this->minute + $addMinute) % 60;
  }

  public function addSecond($addSecond){
    $tmp_hour = floor(($this->second + $addSecond)/(60*60));
    $this->addHour($tmp_hour);
    $tmp_second = $this->second + $addSecond - $tmp_hour*60*60;
    $this->addMinute(floor($tmp_second/60));
    $this->second = ($this->second + $addSecond)%60;
  }
  
  public function getTime(){
    return "ただいま{$this->hour}時{$this->minute}分{$this->second}秒です";
  }
}

// エラーケース１
// NG: "ただいま0時61分1秒です"
// OK: "ただいま1時0分1秒です"
// $my_time1 = new MyTime(0,0,0);
// $my_time1->addSecond(60*60+1);
// var_dump($my_time1->getTime());


// エラーケース２
//NG: "ただいま24時2分3秒です"
//OK: "ただいま0時2分3秒です"
$my_time2 = new MyTime(11,2,3);
$my_time2->addHour(13);
var_dump($my_time2->getTime());

// エラーケース３
//NG: "ただいま24時0分0秒です"
//OK: "ただいま0時0分0秒です"
$my_time3 = new MyTime(23,59,0);
$my_time3->addMinute(1);
var_dump($my_time3->getTime());

// エラーケース４
//NG: "ただいま23時60分0秒です"
//OK: "ただいま0時0分0秒です"
$my_time4 = new MyTime(23,59,59);
$my_time4->addSecond(3601);
var_dump($my_time4->getTime());
?>

