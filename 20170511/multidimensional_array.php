<?php
    //多次元配列
    $Data = [
        ["A", "B", "C", "D", "E"],
        ["F", "G", "H", "I", "J"],
        ["K", "L", "M", "N", "O"],
        ["P", "Q", "R", "S", "T"],
        ["U", "V", "W", "X", "Y"]
    ];
    
    for($i = 0; $i < 5; $i++) {
        for($j = 0; $j < 5; $j++) {
            //echo $Data[$i][$j]."<br>";
        }
    }

    for($i = 0; $i < 5; $i++) {
        for($j = 0; $j < 5; $j++) {
            if($Data[$i][$j] != "B" && $Data[$i][$j] != "F" && $Data[$i][$j] != "X") {
                //echo $Data[$i][$j]."<br>";
            }
        }
    }

    $except = ["B","F", "X"];

    for($i = 0; $i < 5; $i++) {
        for($j = 0; $j < 5; $j++) {
            $flag = 0;
            for($k = 0; $k < count($except); $k++) {
                if($Data[$i][$j] == $except[$k]) {
                    $flag = 1;
                    break;
                }
            }
            if($flag == 0) {
                echo $Data[$i][$j]."<br>";
            }
        }
    }
 ?>
