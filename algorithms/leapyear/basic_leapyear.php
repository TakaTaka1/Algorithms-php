<?php

// ベン図を意識して実装する
// 100で割り切れる年は4で全て割り切れる
// 400で割り切れる年は100で全て割り切れる

function leapYear($year){
    if($year%4 == 0){
        if($year%400 == 0 && $year%100 != 0){
            return true;
        }
        return true;
    }
    return false;
}
