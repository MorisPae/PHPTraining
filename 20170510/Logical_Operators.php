<?php
//論理演算子

    $x = 100;
    $y = 50;

    if($x == 100 && $y == 50) {
        echo "Hello world";
    }

    //$x および $yがともに TRUE なら TRUE
    $x == 100 and $y == 50;
    $c == 100 && $y == 50;

    //どちらか一方が TRUE なら TRUE
    $x == 111 or $y == 50;
    $x == 100 || $y == 120;

    //$x が TRUE でない場合 TRUE
    ! $x == 200;

    //$a または $b のどちらかが TRUE でかつ両方とも TRUE でない場合に TRUE
    $x == 100 xor $y == 100;

 ?>
