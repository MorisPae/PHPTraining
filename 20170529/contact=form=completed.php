<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>完了画面</title>
    <link rel = "stylesheet" href = "styles0.css">
</head>
<body>
    <?php
        //入力値の受け取り
        function post($data) {
            if (isset($_POST["$data"] )) {
                // $_POST["$data"] = str_replace("\n", "<br>", $_POST["$data"]);
                return str_replace(",", "&#x2C;", $_POST["$data"]);
            }
        }

        //配列になっている入力値の受け取り
        function post_array($data) {
            if (isset($_POST["$data"]) && is_array($_POST["$data"])) {
                return str_replace(",", "&#x2C;", $_POST["$data"]);
            }
        }

        function random($length = 8) {
            return substr(str_shuffle("1234567890abcdefghijklmnopqresuvwxyz"), 0, $length);
        }

        //CSVファイルに値保存
        $Rnum = random();
        $fp = fopen("contact=contents.csv", "r+");
        while (($tmp = fgets($fp)) != false) { //CSVファイルの最後の追加できるようにする処理
            $str = explode(",", $tmp);
            while ($Rnum == $str[0]) {
                $Rnum = random();
                rewind($fp);
            }
        }

        $Fname = post("Fname");
        $Name = post("Name");
        $Gender = post("Gender");
        $Address = post("Address");
        $Tnum1 = post("Tnum1");
        $Tnum2 = post("Tnum2");
        $Tnum3 = post("Tnum3");
        $Email1 = post("Email1");
        $Email2 = post("Email2");
        $How_Known = post_array("How_Known");
        $QCtgry = post("QCtgry");
        $Contents = post_array("contents");
        $Known = "";
        $Cnt = "";
        for ($i = 0; $i < count($How_Known); $i++) {
            if (isset($How_Known[$i])) {
                $Known .= $How_Known[$i]." ";
            }
        }
        foreach ($Contents as &$c) {
            $c = htmlentities($c);
        }
        $Cnt = implode("<br>", $Contents);
        /*
        for ($i = 0; $i < count($Contents); $i++) {
            if (isset($Contents[$i])) {
                $Cnt .= $Contents[$i]."<br>";
            }
        }
        */

        $Known = trim($Known);
        fputs($fp, $Rnum.",".$Fname.",".$Name.",".$Gender.",".$Address.",".
            $Tnum1."-".$Tnum2."-".$Tnum3.",".$Email1."@".$Email2.",".
            $Known.",".$QCtgry.",".$Cnt."\n");
        fclose($fp);
     ?>
    <h1>完了画面</h1>
        <div class="steps">
            <div class="otherstep">STEP 1 お問い合わせ</div>
            <div class="spacestep">- - - -</div>
            <div class="otherstep">STEP 2 確認画面</div>
            <div class="spacestep">- - - -</div>
            <div class="nowstep">STEP 3 完了画面</div>
        </div>
    <div class="main">
        <div class="recived">
            <div class="form3">入力内容を受け取りました。</div>
            <div class="form4">
                <div>受付番号: <?php print $Rnum; ?></div>
            </div>
        </div>
</body>
</html>
