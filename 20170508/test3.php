<?php
$var_local = 5;

function local() {
    global $var_local;
    echo $var_local;
}

local();
 ?>
