<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>完了画面</title>
    <link rel = "stylesheet" href = "styles.css">
</head>
<body>
    <?php
        //入力値の受け取り
        function post($data) {
            if (isset($_POST["$data"] )) {
                $_POST["$data"] = str_replace("\n", "<br>", $_POST["$data"]);
                return $_POST["$data"];
            }
        }

        //配列になっている入力値の受け取り
        function post_array($data) {
            //print $data."<br>";
            if (isset($_POST["$data"]) && is_array($_POST["$data"])) {
                //print $_POST["$data"][0]."<br>";
                return $_POST["$data"];
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
        for ($i = 0; $i < count($Contents); $i++) {
            if (isset($Contents[$i])) {
                $Cnt .= $Contents[$i]." ";
                //print $Contents[$i];
            }
        }

        $Known = trim($Known);
        fputs($fp, $Rnum.",".$Fname.",".$Name.",".$Gender.",".$Address.",".
            $Tnum1."-".$Tnum2."-".$Tnum3.",".$Email1."@".$Email2.",".
            $Known.",".$QCtgry.",".$Cnt."\n");
        fclose($fp);
     ?>
    <h3>STEP 3 完了画面</h3>
    <p>
        入力内容を受け取りました<br>
        受付番号: <?php print $Rnum; ?>
    </p>
</body>
</html>
