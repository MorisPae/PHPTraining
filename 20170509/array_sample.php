<?php
    $a = array("C言語","MySQL","PHP","VPS");
    print_r($a);
 ?>
<br>
<?php
    $b = array("C言語","MySQL","PHP","VPS");
    echo $b[2];
 ?>
<br>
<?php
    $c[0] = "C言語";
    $c[1] = "MySQL";
    $c[2] = "PHP";
    $c[3] = "ABC";
    print_r($c);
 ?>
 <br>
<?php
$d[] = "C言語";
$d[] = "MySQL";
$d[] = "PHP";
$d[] = "AKB";
print_r($d);
 ?>
<br>
<?php
    $e = ["a","b","c"];
    print($e[0]);
    $e[3] = "d";
    print_r($e);
 ?>
