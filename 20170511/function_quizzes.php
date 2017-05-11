<?php
    //課題1
    function msg() {
        echo "2017年度の新入社員研修がスタートしました。頑張りましょう";
    }

    msg();
 ?>

<hr>

<?php
    //課題2
    function addfive($num) {
        $num += 5;
    }
    //「&」リファレンス渡し:関数に変数を渡すことができる。関数内でその引数を修正可能になる。
    // http://php.net/manual/ja/language.references.pass.php
    function addsix(&$num) {
        $num += 6;
    }
    $orignum = 10;
    addfive($orignum);
    echo "元の値は $orignum<br/>";
    addsix($orignum);
    echo "元の値は $orignum<br/>";
 ?>
