<?php
$var_local = "good";
function x() {
    global $var_global;
    $var_local = "not good";
    echo $var_local . $var_global;
}
$var_global = "great";
x();
 ?>
