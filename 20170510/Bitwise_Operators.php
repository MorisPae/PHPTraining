<?php
//ビット演算子

    //$a および $b の両方にセットされているビットがセットされる
    $a & $b;

    //$a または $b のどちらかにセットされているビットがセットされます
    $a | $b;

    /*
    $a または $b のどちらか一方にセットされており、
    両方にセットされていないビットがセットされます*/
    $a ^ $b;

    //$a にセットされているビットはセットせず、そうでないものは逆にします
    ~ $a;

 ?>
