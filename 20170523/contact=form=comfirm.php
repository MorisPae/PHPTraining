<?php
    //入力値の受け取り&表示
    function post($data) {
        if (isset($_POST["$data"] )) {
            echo $_POST["$data"];
        }
    }
    //配列になっている入力値の受け取りと表示
    function post_array($data) {
        if (is_array($_POST["$data"])) {
            echo implode(",", $_POST["$data"]);
        }
        //print count($_POST["How_Known"]);
    }
    //CSVファイルに値保存
 ?>
<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>確認画面</title>
    <link rel = "stylesheet" href = "styles.css">
</head>
<body>
    <h3>確認画面</h3>
    <p>記入内容をご確認ください</p>
    <table border = "1">
        <tr>
            <td>性</td>
            <td>
                <?php post("Fname"); ?>
            </td>
        </tr>
        <tr>
            <td>名</td>
            <td>
                    <?php post("Name"); ?>
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
            <td>
                <?php post("Tnum1"); ?>-
                <?php post("Tnum2"); ?>-
                <?php post("Tnum3"); ?>
            </td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td>
                <?php post("Email1"); ?>
                @
                <?php post("Email2"); ?>
            </td>
        </tr>
        <tr>
            <td>どこで知ったか</td>
            <td>
                <?php
                    ini_set("display_errors", 0);
                    post_array("How_Known");
                 ?>
            </td>
        </tr>
        <tr>
            <td>質問カテゴリ</td>
            <td><?php post("QCtgry"); ?></td>
        </tr>
        <tr>
            <td>質問内容</td>
            <td><?php post("Contents"); ?></td>
        </tr>
    </table>
    <div>
        <form = action = "contact=form=completed.php" method="post">
            <input type = "submit" value = "送信">
            <input type = "button" onclick = "history.back()" value = "戻る">
        </form>
    </div>
    <a href = "contact=form.php">未入力状態でお書き直します</a>
</body>
</html>
