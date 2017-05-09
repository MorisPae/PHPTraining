<?php
    //for文を使った場合
    for($i = 0; $i < 5; $i++) {
        echo "number :".($i+1)."<br>";
    }
 ?>

<hr>

<?php
    //do...while使った場合
    $x = 1;
    do {
        echo "number :$x<br>";
        $x++;
    }while($x<=5);
 ?>
