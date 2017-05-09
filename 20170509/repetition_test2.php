<?php
    //for文を使った場合
    $color = array("赤","緑","青","黄色");
    for($i = 0; $i < count($color); $i++) {
        echo "{$color[$i]}<br>";
    }
 ?>

 <hr>

<?php
    //foreachの場合
    $colors = ["赤","緑","青","黄色"];
    foreach($colors as $value) {
        echo "{$value}<br>";
    }
 ?>
