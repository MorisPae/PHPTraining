<?php
    function random($length = 8) {
        return substr(str_shuffle("1234567890abcdefghijklmnopqresuvwxyz"), 0, $length);
    }
    //csvファイルに追記可能、1行読み取りができていない
    $fp = fopen("contact=contents.csv", "r+");
    while (($tmp = fgets($fp)) != false) {
        $str = $tmp;
        //$str = ramdom();
    }
    $Rnum = random();
    fputs($fp, $Rnum."\n");
    fclose($fp);
 ?>
<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>完了画面</title>
    <link rel = "stylesheet" href = "styles.css">
</head>
<body>
    <h3>完了画面</h3>
    <p>
        入力内容を受け取りました<br>
        受付番号は<?php print $str; print $Rnum; ?>
    </p>
</body>
</html>
