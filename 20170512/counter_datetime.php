<?php
    $file_name = "count.csv";
    if(file_exists($file_name)) {
        echo $file_name."が存在します<br>";
    }
    else {
        echo $file_name."が存在しません<br>";
    }

    $fp = fopen("count.csv", "r+");
    /*
    while (($tmp = fgets($fp)) != false) {
        $str = $tmp;
        $str = trim($str);
        $count = $str;
    }
    */
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
