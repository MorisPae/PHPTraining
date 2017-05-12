<?php
    $fp = fopen("count.csv", "r+");
    $str = fgets($fp);
    $count = explode(",", $str)[0];
    $count++;
    $oldtime = explode(",", $str)[1];
    $now = time();

    rewind($fp);
    fputs($fp, $count.",".$now);
    fclose($fp);

    $weekdays = ["日", "月", "火", "水", "木", "金", "土"];

    print $count."<br>";
    printf("%s(%s)%s<br>" , date("Y n/j ", $now), $weekdays[date("w", $now)], date(" G:i:s", $now));
    printf("前回:%s(%s)%s<br>" , date("Y n/j ", $oldtime), $weekdays[date("w", $oldtime)], date(" G:i:s", $oldtime));
 ?>
