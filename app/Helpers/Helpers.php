<?php


namespace App\Helpers;


use Carbon\Carbon;

class Helpers
{
static function makeTime($fixture){
    $today=date('y-m-d');
    $today_timestamp=Carbon::parse($today)->getTimestamp();
    if ($today_timestamp==$fixture->day_timestamp){
        if ($fixture->st_short=="NS"){
            return "Today/".Carbon::parse($fixture->date)->format('h:i:s');
        }elseif ($fixture->st_short=="FT"){
            return "FT";
        }else{
            return $fixture->st_short;
        }
    }else{
        return $fixture->st_short;
    }

}
}
