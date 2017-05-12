<?php
    //UNIX TIMESTAMP:協定世界時(UTC)を基準にした1970年1月1日の0時0分0秒からの経過秒数
    $now = time();
    print time()."<br />";

    $weekday = ["日", "月", "火", "水", "木", "金", "土"];
    printf("%s(%s)%s" , date("Y n/j "), $weekday[date("w")], date(" G:i"));
 ?>
