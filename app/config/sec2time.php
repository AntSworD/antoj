<?
//将秒（非时间戳）转化成 时间  
function sec2time($time)
{
    $sec    = $time % 60;
    $time   = $time / 60;
    $minute = $time % 60;
    $hour   = $time / 60;

    echo sprintf("%02d:%02d:%02d", $hour, $minute, $sec);
}  