<?php
    //sample1
    function writeMsg() {
        echo "Hello world";
    }

    writeMsg();
 ?>

<hr>

<?php
    //sample2 引数一つの変数
    function familyName($fname) {
        echo "$fname yamada.<br>";
    }

    familyName("yuuki");
    familyName("hirobumi");
    familyName("yukiko");
    familyName("hanako");
    familyName("keichi");
 ?>

<hr>

<?php
    //sample3 引数2つの変数
    function familyName2($fname, $year) {
        echo "$fname yamadaが生まれた年は $year <br>";
    }

    familyName2("yuuki", "1975");
    familyName2("hirobumi", "1978");
    familyName2("yukiko", "1983");00
 ?>

<hr>

<?php
    //sample4 引数の値はデフォルトの関数
    function setHeight($minheight = 50) {
        echo "高さは :$minheight <br>";
    }
    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);
 ?>

<hr>

<?php
    //sample5 値を返す関数
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = ".sum(5, 10)."<br>";
    echo "7 + 13 = ".sum(7, 13)."<br>";
    echo "2 + 4 = ".sum(2, 4)."<br>";
 ?>
