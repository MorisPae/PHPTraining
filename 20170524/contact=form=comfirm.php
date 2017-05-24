<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>確認画面</title>
    <link rel = "stylesheet" href = "styles.css">
</head>
<body>
<?php
    //入力値の受け取り&表示
    function post($data) {
        if (isset($_POST["$data"] )) {
            //$_POST["$data"] = str_replace("\n", "<br>", $_POST["$data"]);
            echo $_POST["$data"];
        }
    }

    //配列になっている入力値の受け取りと表示
    function post_array($data, $char) {
        if (is_array($_POST["$data"])) {
            echo implode($char, $_POST["$data"]);
        }
        //print count($_POST["How_Known"]);
    }
 ?>

    <h3>確認画面</h3>
    <p>記入内容をご確認ください</p>
    <form = action = "contact=form=completed.php" method="post">
        <?php
            //完了画面への各値の送信
            print "<input type = \"hidden\" name = \"Fname\" value = ".$_POST["Fname"]." />";
            print "<input type = \"hidden\" name = \"Name\" value = ".$_POST["Name"]." />";
            print "<input type = \"hidden\" name = \"Gender\" value = ".$_POST["Gender"]." />";
            print "<input type = \"hidden\" name = \"Address\" value = ".$_POST["Address"]." />";
            print "<input type = \"hidden\" name = \"Tnum1\" value = ".$_POST["Tnum1"]." />";
            print "<input type = \"hidden\" name = \"Tnum2\" value = ".$_POST["Tnum2"]." />";
            print "<input type = \"hidden\" name = \"Tnum3\" value = ".$_POST["Tnum3"]." />";
            print "<input type = \"hidden\" name = \"Email1\" value = ".$_POST["Email1"]." />";
            print "<input type = \"hidden\" name = \"Email2\" value = ".$_POST["Email2"]." />";
            if (isset($_POST["How_Known"])) { //isset — 変数がセットされていること、そして NULL でないことを検査する
                for ($i = 0; $i < count($_POST["How_Known"]); $i++) {
                    print "<input type = \"hidden\" name = \"How_Known[]\" value = ".$_POST["How_Known"][$i]." />";
                }
            }
            print "<input type = \"hidden\" name = \"QCtgry\" value = ".$_POST["QCtgry"]." />";
            if (isset($_POST["Contents"])) {
                $_POST["Contents"] = explode("\n", $_POST["Contents"]);
                for ($i = 0; $i < count($_POST["Contents"]); $i++) {
                    print "<input type = \"hidden\" name = \"contents[]\" value = ".str_replace(" ", "&nbsp;", $_POST["Contents"][$i])." />"; //$nbsp;
                }
            }
         ?>
    <table border = "1">
        <tr>
            <td>性</td>
            <td>
                <?php
                    post("Fname");
                 ?>
            </td>
        </tr>
        <tr>
            <td>名</td>
            <td>
                    <?php
                        post("Name");
                     ?>
            </td>
        </tr>
        <tr>
            <td>性別</td>
            <td><?php post("Gender"); ?></td>
        </tr>
        <tr>
            <td>住所</td>
            <td><?php post("Address"); ?></td>
        </tr>
        <tr>
            <td>電話番号</td>
            <td><?php post("Tnum1"); ?>-<?php post("Tnum2"); ?>-<?php post("Tnum3"); ?></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><?php post("Email1"); ?>@<?php post("Email2"); ?></td>
        </tr>
        <tr>
            <td>どこで知ったか</td>
            <td>
                <?php
                    ini_set("display_errors", 0);
                    post_array("How_Known", ",");
                 ?>
            </td>
        </tr>
        <tr>
            <td>質問カテゴリ</td>
            <td><?php post("QCtgry"); ?></td>
        </tr>
        <tr>
            <td>質問内容</td>
            <td><?php post_array("Contents", "<br>"); ?></td>
        </tr>
    </table>
    <div>


            <input type = "submit" value = "送信">
            <input type = "button" onclick = "history.back()" value = "戻る">
        </form>
    </div>
    <a href = "contact=form.php">未入力状態でお書き直します</a>
</body>
</html>
